<?php
  include "../connect.php";

  session_start();

  if(count($_SESSION) == 0){
    header("location:Login.php");
  }

  if(isset($_POST) AND COUNT($_POST) > 0){
    $main_heading =  $_POST['main_heading'];
    $heading =  $_POST['heading'];
    $sql = "INSERT into best_seller (main_heading,heading) VALUES ('".$main_heading."','".$heading."')";
    if (mysqli_query($conn,$sql)){
      echo "inserted";
    }
    else {
      echo "error";
    }
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Best Seller Detail</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
<!-- -----------1st PHP Start Top_bar Heading----------- -->
<?php include "top_bar.php";?>
<!-- -----------1st PHP End----------- -->

<?php   include ("navBar.php") ?>

  <div class="seller_form">
    <div class="container">
      <div class="row">
        <div class="col-sm-6 Add_form">
          <form action="bestSeller.php" method="POST">
            <div class="form-group">
              <label for="exampleproductname">Heading 1</label><br>
              <input type="text" name="main_heading" required class="form-control" placeholder="Enter your Main Heading" size="40"><br>
            </div>
            <div class="form-group">
              <label for="labelprice">Heading 2</label><br>
              <input type="text" name="heading" required class="form-control" placeholder="Enter your Heading" size="40"><br>
            </div>
            <button type="submit" class="btn btn-primary">Add BestSeller</button>
            </form>
          </div>
        </div>
      </div>
  </div>

  <!-- <form action="bestSeller.php" method="POST" encctype="multipart/form-data">
      <input type="text" name="main_heading" placeholder="Enter your Main Heading" size="40"><br><br>
      <input type="text" name="heading" placeholder="Enter your Heading" size="40"><br><br>
      <button>Submit</button>
  </form> -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>    
    <script src="css/bootstrap.min.js"></script>
</body>
</html>