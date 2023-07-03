<?php
include "connect.php";
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Product</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    
  </head>

  <body>
    <header>
      <div class="top_bar">
        <div class="container">
          <div class="row">
            <div class="col-xs-12">
              <div class="top_bar_text">
                <p>FREE TRACKED SHIPPING WORLDWIDE ON ORDERS OVER $100</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>

    <div class="navigation_header">
        <div class="container">        
          <div class="row">
            <div class="col-sm-3">
              <div class="logo">
                <img src="images/logo.png">
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
                    <li><a href="index.php">Home</a></li>
                    <li><a href="About.php">About</a></li>
                    <li><a href="#">Jewelry</a></li>
                    <li><a href="contactUs.php">Contact</a></li>
                  </ul>
                </div><!-- /.navbar-collapse -->
              </div><!-- /.container-fluid -->
            </nav>
          </div>
            
            <div class="col-sm-2">
              <div class="icons">
                <img src="images/search.png">
                <img src="images/person.png">
                <img src="images/cart.png">
              </div>
            </div>
          </div>          
        </div>
    </div>

    <div class="Banner">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12 ProductBanner">
                    <!-- <h1>Contact Us</h1> -->
                    <img src="images/product_banner.jpg">
                </div>
            </div>
        </div>
    </div>
<!-- -----------1st PHP Start with 3 product----------- -->

      <section class="FirstSec">
          <div class="container SecOne">
          <div class="row padding">
      <!-- -----------1st Product Start with 1 product----------- -->
          <?php
                $sql = "SELECT * FROM product_detail where Id = 1";
                $result = mysqli_query($conn, $sql);
                while($row = mysqli_fetch_assoc($result)) {
          ?>
          <div class="col-sm-4 leftPicDetails">
            <img src="<?php print $row["pro_img"]; ?>">  
              <!-- <img src="images/p1.jpg"> -->
              <div class="Product_Heading">
                <h4><?php print $row["pro_name"]; ?></h4>  
                <!-- <h4>Product Name</h4> -->
              </div>
              <div class="Price">
                <h3><?php print $row["pro_price"]; ?></h3>
                <!-- <h3>$123</h3> -->
              </div>
              <?php } ?>
              <div class="Shop_now">
                    <a href="ProductDetails_1.php" class="hvr-grow tc-image-effect-shine">Shop Now</a>
              </div>
          </div>
      <!-- -----------1st Product End with 1 product----------- -->
    
      <!-- -----------2nd Product Start with 2 product----------- -->
          <?php
                $sql = "SELECT * FROM product_detail where Id = 2";
                $result = mysqli_query($conn, $sql);
                while($row = mysqli_fetch_assoc($result)) {
          ?>
            <div class="col-sm-4 centerPicDetails">
                <img src="<?php print $row["pro_img"]; ?>">
                <!-- <img src="images/p2.jpg"> -->
                <div class="Product_Heading">
                  <h4><?php print $row["pro_name"]; ?></h4>  
                  <!-- <h4>Product Name</h4> -->
                </div>
                <div class="Price">
                  <h3><?php print $row["pro_price"]; ?></h3>  
                  <!-- <h3>$123</h3> -->
                </div>

                <?php } ?>

                <div class="Shop_now">
                    <a href="ProductDetails_2.php" class="hvr-grow tc-image-effect-shine">Shop Now</a>
                </div>
            </div>
      <!-- -----------2nd Product End with 2 product----------- -->

      <!-- -----------3rd Product Start with 3 product----------- -->
          <?php
                $sql = "SELECT * FROM product_detail where Id = 3";
                $result = mysqli_query($conn, $sql);
                while($row = mysqli_fetch_assoc($result)) {
          ?>
            <div class="col-sm-4 rightPicDetails">
              <img src="<?php print $row["pro_img"]; ?>">
              <!-- <img src="images/p3.jpg"> -->
              <div class="Product_Heading">
                <h4><?php print $row["pro_name"]; ?></h4>  
                <!-- <h4>Product Name</h4> -->
              </div>
              <div class="Price">
                <h3><?php print $row["pro_price"]; ?></h3>
                <!-- <h3>$123</h3> -->
              </div>
              <?php } ?>
              <div class="Shop_now">
                  <a href="ProductDetails_3.php" class="hvr-grow tc-image-effect-shine">Shop Now</a>
              </div>
            </div>
      <!-- -----------3rd Product End with 3 product----------- -->
          </div>
        </div>
      </section>
<!-- -----------1st PHP End with 3 product----------- -->


<!-- -----------2nd PHP Start with 3 product----------- -->
      <section class="SecondSec">
          <div class="container SecTwo">
          <div class="row padding">
      <!-- -----------4th Product Start with 4 product----------- -->
          <?php
                $sql = "SELECT * FROM product_detail where Id = 4";
                $result = mysqli_query($conn, $sql);
                while($row = mysqli_fetch_assoc($result)) {
          ?>
          <div class="col-sm-4 leftPicDetails">
            <img src="<?php print $row["pro_img"]; ?>">
            <!-- <img src="images/p4.jpg"> -->
            <div class="Product_Heading">
              <h4><?php print $row["pro_name"]; ?></h4>
              <!-- <h4>Product Name</h4> -->
            </div>
            <div class="Price">
              <h3><?php print $row["pro_price"]; ?></h3>
              <!-- <h3>$123</h3> -->
            </div>

            <?php } ?>

            <div class="Shop_now">
              <a href="ProductDetails_4.php" class="hvr-grow tc-image-effect-shine">Shop Now</a>
            </div>
          </div>
      <!-- -----------4th Product End with 4 product----------- -->

      <!-- -----------5th Product Start with 5 product----------- -->
          <?php
                $sql = "SELECT * FROM product_detail where Id = 5";
                $result = mysqli_query($conn, $sql);
                while($row = mysqli_fetch_assoc($result)) {
          ?>
          <div class="col-sm-4 centerPicDetails">
            <img src="<?php print $row["pro_img"]; ?>">
            <!-- <img src="images/product1.jpg"> -->
            <div class="Product_Heading">
              <h4><?php print $row["pro_name"]; ?></h4>
              <!-- <h4>Product Name</h4> -->
            </div>
            <div class="Price">
              <h3><?php print $row["pro_price"]; ?></h3>
              <!-- <h3>$123</h3> -->
            </div>

            <?php } ?>

            <div class="Shop_now">
              <a href="ProductDetails_5.php" class="hvr-grow tc-image-effect-shine">Shop Now</a>
            </div>
          </div>
      <!-- -----------5th Product Start with 5 product----------- -->

      <!-- -----------6th Product Start with 6 product----------- -->
          <?php
                $sql = "SELECT * FROM product_detail where Id = 6";
                $result = mysqli_query($conn, $sql);
                while($row = mysqli_fetch_assoc($result)) {
          ?>
          <div class="col-sm-4 rightPicDetails">
            <img src="<?php print $row["pro_img"]; ?>">
            <!-- <img src="images/product2.jpg"> -->
            <div class="Product_Heading">
              <h4><?php print $row["pro_name"]; ?></h4>
              <!-- <h4>Product Name</h4> -->
            </div>
            <div class="Price">
              <h3><?php print $row["pro_price"]; ?></h3>
              <!-- <h3>$123</h3> -->
            </div>

            <?php } ?>

            <div class="Shop_now">
              <a href="ProductDetails_6.php" class="hvr-grow tc-image-effect-shine">Shop Now</a>
            </div>
          </div>
      <!-- -----------6th Product Start with 6 product----------- -->

              </div>
          </div>
      </section>
<!-- -----------2nd PHP End with 3 product----------- -->

<!-- -----------3rd PHP Start with 3 product----------- -->
      <section class="ThirdSec">
          <div class="container Sec Three">
              <div class="row padding">
      <!-- -----------7th Product Start with 7 product----------- -->
          <?php
                $sql = "SELECT * FROM product_detail where Id = 7";
                $result = mysqli_query($conn, $sql);
                while($row = mysqli_fetch_assoc($result)) {
          ?>
          <div class="col-sm-4 leftPicDetails">
            <img src="<?php print $row["pro_img"]; ?>">
            <!-- <img src="images/product3.jpg"> -->
            <div class="Product_Heading">
              <h4><?php print $row["pro_name"]; ?></h4>
              <!-- <h4>Product Name</h4> -->
            </div>
            <div class="Price">
              <h3><?php print $row["pro_price"]; ?></h3>
              <!-- <h3>$123</h3> -->
            </div>

            <?php } ?>

            <div class="Shop_now">
              <a href="ProductDetails_4.php" class="hvr-grow tc-image-effect-shine">Shop Now</a>
            </div>
          </div>
      <!-- -----------7th Product End with 7 product----------- -->

      <!-- -----------8th Product Start with 8 product----------- -->
          <?php
                $sql = "SELECT * FROM product_detail where Id = 8";
                $result = mysqli_query($conn, $sql);
                while($row = mysqli_fetch_assoc($result)) {
          ?>
          <div class="col-sm-4 centerPicDetails">
            <img src="<?php print $row["pro_img"]; ?>">
            <!-- <img src="images/product4.jpg"> -->
            <div class="Product_Heading">
              <h4><?php print $row["pro_name"]; ?></h4>
              <!-- <h4>Product Name</h4> -->
            </div>
            <div class="Price">
              <h3><?php print $row["pro_price"]; ?></h3>
              <!-- <h3>$123</h3> -->
            </div>

            <?php } ?>

            <div class="Shop_now">
              <a href="ProductDetails_5.php" class="hvr-grow tc-image-effect-shine">Shop Now</a>
            </div>
          </div>
      <!-- -----------5th Product Start with 8 product----------- -->

      <!-- -----------9th Product Start with 9 product----------- -->
          <?php
                $sql = "SELECT * FROM product_detail where Id = 9";
                $result = mysqli_query($conn, $sql);
                while($row = mysqli_fetch_assoc($result)) {
          ?>
          <div class="col-sm-4 rightPicDetails">
            <img src="<?php print $row["pro_img"]; ?>">
            <!-- <img src="images/product5.jpg"> -->
            <div class="Product_Heading">
              <h4><?php print $row["pro_name"]; ?></h4>
              <!-- <h4>Product Name</h4> -->
            </div>
            <div class="Price">
              <h3><?php print $row["pro_price"]; ?></h3>
              <!-- <h3>$123</h3> -->
            </div>

            <?php } ?>

            <div class="Shop_now">
              <a href="ProductDetails_6.php" class="hvr-grow tc-image-effect-shine">Shop Now</a>
            </div>
          </div>
      <!-- -----------9th Product Start with 9 product----------- -->
              </div>
          </div>
      </section>
<!-- -----------3rd PHP End with 3 product----------- -->

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
                <img src="images/pay.png">
              </div>
              </div>
            </div>
          </div>
        </section>
</footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>    
    <script src="js/bootstrap.min.js"></script>
</body>
</html>