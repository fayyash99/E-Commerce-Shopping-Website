<?php
  include "../connect.php";

  session_start();
  if(count($_SESSION) == 0){
    header("location:Login.php");
  }

  if(isset($_POST) AND COUNT($_POST) > 0){
    $leftimage =  $_POST['leftimage'];
    $heading1 =  $_POST['heading1'];
    $heading2 =  $_POST['heading2'];
    $describe =  $_POST['describe'];
    $rightimage	 =  $_POST['rightimage'];
    $heading3 =  $_POST['heading3'];


    $sql = "INSERT into about (leftimage,heading1,heading2,describe,rightimage,heading3) VALUES 
    ('".$leftimage."','".$heading1."','".$heading2."','".$describe."','".$rightimage."','".$heading3."')";

    if (mysqli_query($conn,$sql)){
      echo "About inserted";
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

    <title>About</title>

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
          <form action="about.php" method="POST">
            <div class="form-group">
              <label for="exampleproductname">Left Image</label><br>
              <input type="text" name="leftimage" required class="form-control" placeholder="Enter Left Image" size="20"><br>
            </div>
            <div class="form-group">
              <label for="exampleproductname">Heading 1</label><br>
              <input type="text" name="heading1" required class="form-control" placeholder="Enter Heading1" size="20"><br>
            </div>
            <div class="form-group">
              <label for="exampleproductname">Heading 2</label><br>
              <input type="text" name="heading2" required class="form-control" placeholder="Enter Heading2" size="20"><br>
            </div>
            <div class="form-group">
              <label for="exampleproductdescription">Description</label><br>
              <textarea name="describe" rows="15" cols="40" required class="form-control" placeholder="Enter About Description"></textarea><br>
            </div>
            <div class="form-group">
              <label for="labelprice">Right Image</label><br>
              <input type="text" name="rightimage" required class="form-control" placeholder="Enter Right Image" size="40"><br>
            </div>
            <div class="form-group">
              <label for="labelprice">Heading 3</label><br>
              <input type="text" name="heading3" required class="form-control" placeholder="Enter Heading3" size="40"><br>
            </div>
            <button type="submit" class="btn btn-primary">Add About</button>
          </form>
        </div>
      </div>
    </div>
  </div>



<!-- <form action="about.php" method="POST" encctype="multipart/form-data">
    <input type="text" name="leftimage" placeholder="Enter your 1st Image" size="40"><br><br>
    <input type="text" name="heading1" placeholder="Enter your 1st Heading" size="40"><br><br>
    <input type="text" name="heading2" placeholder="Enter your 2nd Heading" size="40"><br><br>
    <textarea type="text" name="describe" rows="15" cols="40" placeholder="Enter your about Description"></textarea><br><br>
    <input type="text" name="describe" placeholder="Enter your about Description" size="40"><br><br>
    <input type="text" name="rightimage" placeholder="Enter your 2nd Image" size="40"><br><br>
    <input type="text" name="heading3" placeholder="Enter your 3rd Heading" size="40"><br><br>
    <button>Contact Now</button>
</form> -->

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>    
  <script src="css/bootstrap.min.js"></script>
</body>
</html>