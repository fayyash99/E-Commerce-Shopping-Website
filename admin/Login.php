<?php
  include "../connect.php";
  session_start();
  $error = "";
  if(isset($_POST) AND count($_POST) > 0){
    $email = $_POST['email'];
    $passwordd = $_POST['passwordd'];


    $sql = "SELECT * FROM user where email = '".$email."' AND passwordd = '".$passwordd."'";
    // print_r($sql); die;

    $result = mysqli_query($conn,$sql);

    if(mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_assoc($result);
        if(isset($row) AND count($row)){
            //echo "Login Done!";
            $_SESSION['id'] = $row['ID'];
            $_SESSION['name'] = $row['firstname']. " ". $row['lastname'];
            $_SESSION['firstname'] = $row['firstname'];
            $_SESSION['lastname'] = $row['lastname'];
            $_SESSION['profile_img'] = $row['profile_Img'];
            $_SESSION['email'] = $row['email'];

            header("location:AdminPage.php");
        }
        else{
          $error = "Login Failed!";
        }
    }
  }
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Login</title>

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
                    <!-- <li><a href="#">Home</a></li> -->
                    <!-- <li><a href="../About.php">About</a></li> -->
                    <li><a href="contactus.php">ContactUs</a></li>
                    <li><a href="Signup.php">SignUp</a></li>
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

<!-- -----------Start Login_form----------- -->
    <div class="Login_form">
        <div class="container">
            <div class="row">
                <h3>Please Login Here</h3>
                <hr>
                <div class="col-md-6 Add_form">
                  <form action="" method="POST">
                    <?php if(!empty($error)) {?>
									    <div class="alert alert-danger">
										    <strong>Error!</strong> <?php echo $error;?>
									    </div>
								    <?php } ?>
                        <div class="form-group">
                            <label for="exampleemail">Email</label><br>
                            <input type="email" name="email" required class="form-control" placeholder="Enter your Eamil" size="40"><br>
                        </div>
                        <div class="form-group">
                            <label for="examplepassword">Password</label><br>
                            <input type="password" name="passwordd" required class="form-control" placeholder="Enter your Password" size="40"><br>
                        </div>
                        <button type="submit" class="btn btn-primary">Login</button><br>
                        <hr>
                    </form>
                </div>

            </div>
        </div>
    </div>
<!-- -----------End----------- -->

<!-- -----------Start About Sec----------- -->
  <section class="About">
        <!-- <div class="Banner">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12 AboutBanner">
                        <h1>Contact Us</h1>
                        <img src="images/About_Us.jpg" alt="">
                        <h1>About Us</h1>
                    </div>
                </div>
            </div>
        </div> -->

        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="AboutImg">
                      <img src="../images/AboutUs5.jpg" alt="">
                      <img src="../images/AboutUs2.jpg" alt="">
                      <img src="../images/AboutUs4.jpg" alt="">
                      <img src="../images/AboutUs1.jpg" alt="">
                    </div>

                    <div class="AboutCenImg">
                      <img src="../images/AboutUs3.jpg" alt="">
                  </div>
                </div>

                <div class="col-sm-6">
                  <div class="AboutDetails">
                      <h1>About Us</h1>
                      <h4>Sed perspiciatis unde omnis iste natus error sit voluptatem accusantium dolore laudantium totam rem aperiam</h4>
                      <p>Uliat enim ad minim veniam quis nostrud exercitation ullamco laboris nis uliate aliquip exea commodo consequat aute irure dolor in reprehenderit in voluptate velit esse cillum dolore mist fugiat nulla pariatur excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit eniam id est laborum sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vita dicta sunt explicabo nemo enim ipsam voluptatem.
                      </p>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas.
                      </p>   
                  </div>
              </div>
            </div>
          </div>



            <div class="container">
              <div class="row">
                  <div class="col-sm-12">
                    <div class="AboutDetails1">
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ulit aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae abillo inventore veritatis eliat quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit sed quia non numquam eiusmodi.
                      </p><br>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolor magnam iusmod tempor incididunt labor aliquam quaerat voluptatem.
                    </p>
                    </div>
                  </div>
              </div>
          </div>
  </section><hr><br>
<!-- -----------End----------- -->



<footer>
      <section class="FootSec">
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-6">
              <div class="FooterText">
              <h5>Copyright © 2021. All rights reserved.</h5>
            </div>
            </div>
            <div class="col-sm-6 ">
              <div class="FooterImg">
              <img src="../images/pay.png">
            </div>
            </div>
          </div>
        </div>
      </section>
</footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>    
    <script src="css/bootstrap.min.js"></script>
</body>
</html>