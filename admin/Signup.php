<?php
  include "../connect.php";
  if(isset($_POST) AND count($_POST) > 0){
    $firstname =  $_POST['firstname'];
    $lastname =  $_POST['lastname'];
    $email =  $_POST['email'];
    $passwordd =  $_POST['passwordd'];
    $profile_Img = $_POST['profile_Img'];

    $sql = "INSERT into user (firstname,lastname,email,passwordd,profile_Img) VALUES ('".$firstname."','".$lastname."','".$email."','".$passwordd."','".$profile_Img."')";

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

    <title>SignUp</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<!-- -----------1st PHP Start Top_bar Heading----------- -->
<?php include "top_bar.php";?>
<!-- -----------1st PHP End----------- -->

<div class="navigation_header">
        <div class="container">        
          <div class="row">
            <div class="col-sm-3">
              <div class="logo">
                <img src="../images/logo.png">
              </div>
            </div>

            <div class="col-sm-6">
            <nav class="navbar navbar-default">
              <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                </div>
            
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                  <ul class="nav navbar-nav">
                    <!-- <li><a href="#">Home</a></li>
                    <li><a href="#">About</a></li> -->
                    <li><a href="contactus.php">ContactUs</a></li>
                    <li><a href="Login.php">Login</a></li>
                  </ul>
                </div><!-- /.navbar-collapse -->
              </div><!-- /.container-fluid -->
            </nav>
          </div>
            
            <!-- <div class="col-sm-2">
              <div class="icons">
                <img src="images/search.png">
                <img src="images/person.png">
                <img src="images/cart.png">
              </div>
            </div> -->
          </div>          
        </div>
</div>

<!-- -----------SignUp_form----------- -->
    <div class="Signup_form">
        <div class="container">
            <div class="row">
                <h3>Please Register Here</h3>
                <hr>
                <div class="col-md-6 Add_form">
                     <form action="" method="post">
                        <div class="form-group">
                            <label for="exampleusername">First Name</label><br>
                            <input type="text" name="firstname" required class="form-control" placeholder="Enter User Name" size="40"><br>
                        </div>
                        <div class="form-group">
                            <label for="examplefullname">Last Name</label><br>
                            <input type="text" name="lastname" required class="form-control" placeholder="Enter your full name" size="40"><br>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label><br>
                            <input type="email" name="email" required class="form-control" placeholder="Enter your Email" size="40"><br>
                        </div>
                        <div class="form-group">
                            <label for="examplepassword">Password</label><br>
                            <input type="password" name="passwordd" required class="form-control" placeholder="Enter your password" size="40"><br>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlFile1">Profile Upload</label>
                            <input type="file" class="form-control-file" name= "profile_Img" id="exampleFormControlFile1">
                        </div>
                        <button type="submit" class="btn btn-primary">Register</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
<!-- -----------End----------- -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>    
    <script src="css/bootstrap.min.js"></script>
</body>
</html>