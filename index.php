<?php
include "connect.php";
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Ecommerce</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    
  </head>
<body>
<!-- -----------1st PHP Start Top_bar Heading----------- -->
    <header>
      <?php
                $sql = "SELECT * FROM top_bar";
                $result = mysqli_query($conn, $sql);
                while($row = mysqli_fetch_assoc($result)) {
      ?>
      <div class="top_bar">
        <div class="container">
          <div class="row">
            <div class="col-xs-12">
              <div class="top_bar_text">
                <!-- <p>FREE TRACKED SHIPPING WORLDWIDE ON ORDERS OVER $100</p> -->
                <p><?php print $row["heading"]; ?></p>

                <?php } ?>

              </div>
            </div>
          </div>
        </div>
      </div>
    </header>
<!-- -----------1st PHP End----------- -->
    
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
                    <li><a href="#">Home</a></li>
                    <li><a href="About.php">About</a></li>
                    <li><a href="Product.php">Jewelry</a></li>
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

<!-- -----------2nd PHP Start Background Banner----------- -->
      <?php
                $sql = "SELECT * FROM banner";
                $result = mysqli_query($conn, $sql);
                while($row = mysqli_fetch_assoc($result)) {
      ?>
      <div class="background">
          <div class="row">
            <div class="col-xs-12">
              <div class="image">
                <!-- <img src="images/background.png"> -->
                <!-- <h2>welcome To</h2>
                <h1>Healing Treasures</h1> -->
                <img src="<?php print $row["image"]; ?>">
                <h2><?php print $row["title"]; ?></h2>
                <h1><?php print $row["descriptionn"]; ?></h1>

                <?php } ?>

                <a href="contactUs.php" class="hvr-grow tc-image-effect-shine">Contact Now</a>
              </div>
            </div>
          </div>
      </div>
<!-- -----------2nd PHP End----------- -->

<!-- -----------7th PHP Start Mid_Bar Product ----------- -->
  <div class="midBar">
    <div class="container">
      <div class="row">
      <!-- -----------1st Product Desc Start----------- -->
            <?php
              $sql = "SELECT * FROM product_detail where Id = 2";
              $result = mysqli_query($conn, $sql);
              while($row = mysqli_fetch_assoc($result)) {
            ?>
            <div class="col-sm-4">
                <img src="<?php print $row["pro_img"]; ?>">
                <h1><?php print $row["pro_name"]; ?></h1>
                <p><?php print $row["pro_desc"]; ?></p>
                <!-- <img src="images/one.jpg">
                <h1>Crystal Healing Pactitioner</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Quas temporibus consequatur animi repellat!</p> -->
                <?php } ?>
            </div>
              
      <!-- -----------1st Product Desc End----------- -->

      <!-- -----------2nd Product Desc Start----------- -->
            <?php
              $sql = "SELECT * FROM product_detail where Id = 3";
              $result = mysqli_query($conn, $sql);
              while($row = mysqli_fetch_assoc($result)) {
            ?>
            <div class="col-sm-4">
                <img src="<?php print $row["pro_img"]; ?>">
                <h1><?php print $row["pro_name"]; ?></h1>
                <p><?php print $row["pro_desc"]; ?></p>
                <!-- <img src="images/two.jpg">
                <h1>Crystal Healing Pactitioner</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Sunt repudiandae quod perspiciatis saepe.</p> -->
                <?php } ?>
            </div>
      <!-- -----------2nd Product Desc Start----------- -->

      <!-- -----------3rd Product Desc Start----------- -->
            <?php
              $sql = "SELECT * FROM product_detail where Id = 4";
              $result = mysqli_query($conn, $sql);
              while($row = mysqli_fetch_assoc($result)) {
            ?>
            <div class="col-sm-4">
              <img src="<?php print $row["pro_img"]; ?>">
              <h1><?php print $row["pro_name"]; ?></h1>
              <p><?php print $row["pro_desc"]; ?></p>
              <!-- <img src="images/three.jpg">
              <h1>Crystal Healing Pactitioner</h1>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Ea dolorem voluptatum culpa tempora?</p> -->
              <?php } ?>
            </div>
      <!-- -----------3rd Product Desc Start----------- -->
      </div>
    </div>
  </div>
<!-- -----------7th PHP End----------- -->

<!-- -----------3rd PHP Start About----------- -->
      <?php
                $sql = "SELECT * FROM about";
                $result = mysqli_query($conn, $sql);
                while($row = mysqli_fetch_assoc($result)) {
      ?>
    <section class="Aboutsec">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-4 col-sm-4 col-xs-12 margin">
            <div class="Aboutimg1">
              <!-- <img src="images/About_1.jpg">  -->
              <!--class="img-responsive" alt="img">-->
              <img src="<?php print $row["leftimage"]; ?>">
            </div>
          </div>
          <div class="col-md-3 col-sm-3 col-xs-12">
            <div class="Abouttext">
              <!-- <h6>Lorem ipsum dolor sit amet,</h6>
              <h3>About Me</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan
                lacus vel facilisis.</p>
              <p>
                Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam
                rem aperiam, eaque ipsa </p> -->
              <h6><?php print $row["heading1"]; ?></h6>
              <h3><?php print $row["heading2"]; ?></h3>
              <p><?php print $row["describe"]; ?></p>
              <a href="#" class="hvr-grow tc-image-effect-shine">Contact Now</a>
            </div>
          </div>
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="Aboutimg2">
              <!-- <img src="images/About_2.jpg"> -->
              <!--class="img-responsive wow zoomIn" data-wow-duration="2s" alt="img">-->
              <!-- <h4>Follow Instagram</h4> -->

              <img src="<?php print $row["rightimage"]; ?>">
              <h4><?php print $row["heading3"]; ?></h4>

              <?php } ?>
            </div>
          </div>
        </div>
      </div>
    </section>
<!-- -----------3rd PHP End----------- -->

<!-- -----------4th PHP Start Best Seller----------- -->
      <?php
                $sql = "SELECT * FROM best_seller";
                $result = mysqli_query($conn, $sql);
                while($row = mysqli_fetch_assoc($result)) {
      ?>
    <div class="Sell">
      <div class="container">
        <div class="row">
          <div class="col-xs-12">
            <div class="SellerHeading">
              <h1><?php print $row["main_heading"]; ?></h1>
              <h4><?php print $row["heading"]; ?></h2> 
              <!-- <h1>Best Seller</h1>
              <h4>Lorem ipsum dolor sit amet,</h2> -->
              <?php } ?>
            </div>
          </div>
        </div>
      </div>
    </div>
<!-- -----------4th PHP End----------- -->

<div class="Product">
      <div class="container">
        <div class="row">
          <div class="col-sm-3 col-xs-12">
            <div class="picOne">
              <img src="images/p1.jpg">
              <h4>Product Name</h4>
              <div class="star">
                <img src="images/star.jpg">
              </div>
              <h3>$123.00 / $133.00</h3>
              <div class="ShopNow">
                <a href="ProductDetails_1.html" class="hvr-grow tc-image-effect-shine">Shop Now</a>
              </div>
            </div>
          </div>
          <div class="col-sm-3 col-xs-12">
            <div class="picTwo">
              <img src="images/p2.jpg">
              <h4>Product Name</h4>
              <div class="star">
                <img src="images/star.jpg">
              </div>
              <h3>$123.00 / $133.00</h3>
              <div class="ShopNow">
                <a href="ProductDetails_2.html" class="hvr-grow tc-image-effect-shine">Shop Now</a>
              </div>
            </div>
          </div>
          <div class="col-sm-3 col-xs-12">
            <div class="picThree">
              <img src="images/p3.jpg">
              <h4>Product Name</h4>
              <div class="star">
                <img src="images/star.jpg">
              </div>
              <h3>$123.00 / $133.00</h3>
              <div class="ShopNow">
                <a href="ProductDetails_3.html" class="hvr-grow tc-image-effect-shine">Shop Now</a>
              </div>
            </div>
          </div>
          <div class="col-sm-3 col-xs-12">
            <div class="picFour">
              <img src="images/p4.jpg">
              <h4>Product Name</h4>
              <div class="star">
                <img src="images/star.jpg">
              </div>
              <h3>$123.00 / $133.00</h3>
              <div class="ShopNow">
                <a href="ProductDetails_4.html" class="hvr-grow tc-image-effect-shine">Shop Now</a>
              </div>
            </div>
          </div>
        </div>
      </div>
</div>

<!-- -----------5th PHP Start Web Details----------- -->
      <?php
                $sql = "SELECT * FROM web_details";
                $result = mysqli_query($conn, $sql);
                while($row = mysqli_fetch_assoc($result)) {
      ?>
        <section class="DetailsSec">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-xs-12 margin1">
                    <div class="background2img">
                      <img src="<?php print $row["backgroundimage"]; ?>">
                      <!-- <img src="images/background2nd.jpg"> -->
                    </div>
                  </div>

                  <div class="col-xs-4">
                    <div class="verticalliine1"></div>
                    <div class="left">
                      <img src="<?php print $row["leftimage"]; ?>">
                      <!-- <img src="images/leftD.jpg"> -->
                    </div>  
                  </div>

                  <div class="col-xs-4">
                    <div class="CenterDetails">
                    <img src="images/comma.png">
                      <p><?php print $row["description"]; ?></p>
                      <h2><?php print $row["heading1"]; ?></h2>
                      <h1><?php print $row["heading2"]; ?></h1>
                      <!-- <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                      <h2>Lita Doe</h2>
                      <h1>Lorem Ipsum</h1> -->
                  </div>
                  </div>

                  <div class="col-xs-4">
                    <div class="right">
                      <img src="<?php print $row["rightimage"]; ?>">
                      <!-- <img src="images/rightD.jpg"> -->
                    </div>
                    <div class="verticalliine2"></div>
                  </div>

                  <?php } ?>

                </div>
              </div>
        </section>
<!-- -----------5th PHP ENd----------- -->

<!-- -----------6th PHP Start Instagram----------- -->
  <section class="InstaSec">
    <div class="container-fluid">
      <div class="row">
  <!-- -----------Instagram Heading PHP Start----------- -->
      <?php
        $sql = "SELECT * FROM insta";
        $result = mysqli_query($conn, $sql);
        while($row = mysqli_fetch_assoc($result)) {
      ?>
      <div class="col-xs-12 InstaContent">
        <h1><?php print $row["heading"]; ?></h1>
        <h4><?php print $row["Insta_describe"]; ?></h4>
          <!-- <h1>Shop By Instagram</h1>
          <h4>Lorem ipsum dolor sit amet</h4> -->
      </div>
      <?php } ?>
  <!-- -----------Instagram Heading PHP End----------- -->

  <!-- -----------Instagram Image PHP Start----------- -->
      <?php
        $sql = "select pro_img from product_detail";
        $paths = array();
        $result = mysqli_query($conn, $sql);
          while($row = mysqli_fetch_assoc($result)){
            foreach ($row as $value){
              $paths[]=$value;}}
      ?>
      <div class="col-xs-2 InstaImg">
        <img src="<?php print $paths[0];?>">
        <!-- <img src="images/oneInsta.jpg"> -->
      </div>
      <div class="col-xs-2 InstaImg">
        <img src="<?php print $paths[1];?>">
        <!-- <img src="images/twoInsta.jpg"> -->
      </div>
      <div class="col-xs-2 InstaImg">
        <img src="<?php print $paths[2];?>">
        <!-- <img src="images/threeInsta.jpg"> -->
      </div>
      <div class="col-xs-2 InstaImg">
        <img src="<?php print $paths[3];?>">
        <!-- <img src="images/fourInsta.jpg"> -->
      </div>
      <div class="col-xs-2 InstaImg">
        <img src="<?php print $paths[4];?>">
        <!-- <img src="images/fiveInsta.jpg"> -->
      </div>
      <div class="col-xs-2 InstaImg">
        <img src="<?php print $paths[5];?>">
        <!-- <img src="images/sisInsta.jpg"> -->
      </div>
  <!-- -----------Instagram Image PHP End----------- -->

  <!-- -----------NewsDetail PHP Start----------- -->
      <div class="col-xs-12 NewsDetails">
        <h1>Join Our Newsletter</h1>
        <h5>Enter your email address to get $20 off your first order</h5>
        <input type="email" name="email" placeholder="Enter Your Mail">
        <button>Subscribe Now</button>
      </div>
  <!-- -----------NewsDetail PHP End----------- -->
  </div>
  </div>
  </section>
<!-- -----------6th PHP End----------- -->

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