<?php
  include "../connect.php";

  session_start();
  if(count($_SESSION) == 0){
    header("location:Login.php");
  }

  if(isset($_POST) AND COUNT($_POST) > 0){
    $title =  $_POST['title'];
    $descriptionn =  $_POST['descriptionn'];
    $image =  $_POST['image'];


    $sql = "INSERT into banner (title,descriptionn,image) VALUES ('".$title."','".$descriptionn."','".$image."')";

    if (mysqli_query($conn,$sql)){

      echo "Banner Inserted";
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

    <title>Banner</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>

<!-- -----------1st PHP Start Top_bar Heading----------- -->
<?php include "top_bar.php";?>
<!-- -----------1st PHP End----------- -->

<?php   include ("navBar.php") ?>

    <div class="Banner_form">
        <div class="container">
          <div class="row">
            <div class="col-sm-6 Add_form">
              <form action="banner.php" method="POST">
                <div class="form-group">
                  <label for="exampleproductname">Banner Title</label><br>
                  <input type="text" name="title" required class="form-control" placeholder="Enter Banner Title" size="20"><br>
                </div>
                <div class="form-group">
                  <label for="exampleproductdescription">Banner Description</label><br>
                  <textarea name="descriptionn" rows="15" cols="40" required class="form-control" placeholder="Enter Banner Description"></textarea><br>
                </div>
                <div class="form-group">
                  <label for="labelprice">Banner Image</label><br>
                  <input type="text" name="image" required class="form-control" placeholder="Enter Banner Image" size="40"><br>
                </div>
                <button type="submit" class="btn btn-primary">Add Banner</button>
              </form>
            </div>
          </div>
        </div>
    </div>

    


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>    
    <script src="css/bootstrap.min.js"></script>
</body>
</html>