<?php
include "../connect.php";
if(isset($_POST) AND COUNT($_POST) > 0){
  $namee =  $_POST['Namee'];
  $emaill =  $_POST['Emaill'];
  $numberr =  $_POST['Numberr'];
  $messagee =  $_POST['Messagee'];

  $sql = "INSERT into contact_us (Namee,Emaill,Numberr,Messagee) VALUES ('".$namee."','".$emaill."','".$numberr."','".$messagee."')";

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
    
    <title>ContactUs</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    
  </head>

  <body>

  <?php include "top_bar.php";?>

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
                    <li><a href="Login.php">Login</a></li>
                  </ul>
                </div><!-- /.navbar-collapse -->
              </div><!-- /.container-fluid -->
            </nav>
          </div>
            
            <!-- <div class="col-sm-2">
              <div class="icons">
                <img src="../images/search.png">
                <img src="../images/person.png">
                <img src="../images/cart.png">
              </div>
            </div> -->
          </div>          
        </div>
    </div>



    <section class="Message">
        <div class="Banner">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12 ContactBanner">
                        <!-- <h1>Contact Us</h1> -->
                        <img src="../images/contact-banner.jpg">
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="MessageDetails">
                        <h2>SEND US MESSAGE</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Quas temporibus consequatur animi repellat!</p>
                        <form action="contactUs.php" method="post" encctype="multipart/form-data">
                          <input type="text" name="Namee" placeholder="Your Name" size="40"><br>
                          <input type="email" name="Emaill" placeholder="Your Email" size="40"><br>
                          <input type="tel" name="Numberr" placeholder="Your Number" size="40"><br>
                          <textarea placeholder="Your Message" name="Messagee" id="Your Message" cols="38" rows="10"></textarea><br><br>
                          <button>SEND MESSAGE</button><br><br>
                      </form>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="ContactDetails">
                        <h2>CONTACT DETAILS</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Quas temporibus consequatur animi repellat!</p>
                        <div class="col-xs-2 ContactImg">
                            <img src="../images/callIcon.png">
                            <img src="../images/locationIcon.png">
                            <img src="../images/mailIcon.png">
                        </div>
                        <div class="col-xs-10 ContactText">
                            <h5>123-456-789</h5>
                            <h5>123 Lorem Ipsum Street 0000</h5>
                            <h5>Info@loremipsum.com</h5>
                        </div>
                        <div class="Map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d28960.28728543365!2d67.00773299959562!3d24.862623067673855!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb33e6d06bea525%3A0xca5759c73e8b99ce!2sSaddar%20Karachi%2C%20Karachi%20City%2C%20Sindh%2C%20Pakistan!5e0!3m2!1sen!2s!4v1635754306893!5m2!1sen!2s" style="border:0;" allowfullscreen=""></iframe>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    

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
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>