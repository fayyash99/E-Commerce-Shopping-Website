<?php
  include "../connect.php";
  session_start();
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
        <img src="../images/logo.png">
          <!-- <a class="navbar-brand" href="#">Brand</a> -->
      </div>
      
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li><a href="banner.php">Banner Management<span class="sr-only">(current)</span></a></li>
          <li><a href="product1.php">Product Management</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Component<span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#">Website Details Management</a></li>
              <li><a href="about.php">About Management</a></li>
              <li><a href="bestSeller.php">Best Seller</a></li>
              <li><a href="#">Instagram Management</a></li>
              <!-- <li role="separator" class="divider"></li>
              <li><a href="#">Separated link</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="#">One more separated link</a></li> -->
            </ul>
          </li>
        </ul>
        <form class="navbar-form navbar-left">
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Search">
          </div>
          <button type="submit" class="btn btn-default">Submit</button>
        </form>

        <ul class="nav navbar-nav navbar-right">
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><h5> <?php print_r($_SESSION['name'])?> </h5> <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="profile.php">Profile</a></li>
              <li><a href="Logout.php">Logout</a></li>
            </ul>
          </li>
            <!-- <li><a href="#">Link</a></li> -->
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>

<!-- -----------Start Profile_form----------- -->
    <div class="Profile_form">
        <div class="container">
            <div class="row">
                <h3>Profile</h3>
                <hr>
                <div class="col-sm-6 Add_form">
                     <form action="" method="POST">
                        <div class="form-group">
                            <label for="exampleemail">First Name</label><br>
                            <!-- <input type="email" name="email" required class="form-control" placeholder="Enter your Eamil" size="40"><br> -->
                            <h5><?php print_r($_SESSION['firstname']) ?> </h5><br><hr>
                        </div>
                        <div class="form-group">
                            <label for="exampleemail">Last Name</label><br>
                            <!-- <input type="email" name="email" required class="form-control" placeholder="Enter your Eamil" size="40"><br> -->
                            <h5><?php print_r($_SESSION['lastname']) ?> </h5><br><hr>
                        </div>
                        <div class="form-group">
                            <label for="exampleemail">Email</label><br>
                            <!-- <input type="email" name="email" required class="form-control" placeholder="Enter your Eamil" size="40"><br> -->
                            <h5><?php print_r($_SESSION['email']) ?> </h5><br><hr>
                        </div>
                    </form>
                </div>

                <div class="col-sm-6 profile_img">
                    <h5><?php print_r($_SESSION['profile_img']) ?> </h5><br>
                </div>

            </div>
        </div>
    </div>
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