<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Ecommerce | About Us</title>

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

    <section class="shipping">
        <div class="container">
            <div class="row">

                <div class="col-sm-8">
                    <div class="col-sm-12 hdpad">
                        <h4>Shipping</h4>
                    </div>

                    <div class="col-sm-12 inpwidth shippingbor">

                        <div class="col-sm-12 detmargin">
                            <div class="col-sm-6">
                                <h5>First Name*</h5>
                            </div>
                            <div class="col-sm-6">
                                <input type="text">
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="col-sm-6">
                                <h5>Last Name*</h5>
                            </div>
                            <div class="col-sm-6">
                                <input type="text">
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="col-sm-6">
                                <h5>Postal Code*</h5>
                            </div>
                            <div class="col-sm-6">
                                <input type="text">
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="col-sm-6">
                                <h5>Address Line 1*</h5>
                            </div>
                            <div class="col-sm-6 popad">
                                <input type="text">
                                <h5>we do not ship to P.O boxes</h5>
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="col-sm-6">
                                <h5>Address Line 2</h5>
                            </div>
                            <div class="col-sm-6">
                                <input type="text">
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="col-sm-6">
                                <h5>Munacipality*</h5>
                            </div>
                            <div class="col-sm-6">
                                <input type="text">
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="col-sm-6">
                                <h5>Province/Territory*</h5>
                            </div>
                            <div class="col-sm-6 popad">
                                <select name="Vehicles" id="cars">
                                    <option value="Select a Province">Select a Province</option>
                                    <option value="Bus">Punjab</option>
                                    <option value="Bike">Sindh</option>
                                    <option value="Collora">Balochistan</option>
                                    <option value="Mehran">KPK</option>
                                    <option value="Mehran">Kashmir</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="col-sm-4">
                                <h5>Country/Region</h5>
                            </div>
                            <div class="col-sm-4">
                                <h5 class="pakistan">Pakistan</h5>
                            </div>
                            <div class="col-sm-4 underline">
                                <h5 class="changecon">Change Country/Region</h5>
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="col-sm-12 rad">
                                <h5>Select Delivery Method</h5>
                                <form>
                                    <input type="radio" id="html" name="fav_language" value="HTML">
                                    <label for="html">standard FREE</label><br>
                                    <input type="radio" id="css" name="fav_language" value="CSS">
                                    <label class="marbtt" for="css">Express PKR 100</label><br>
                                </form>
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="col-sm-6">
                                <h5>Shipping Phone*</h5>
                            </div>
                            <div class="col-sm-6">
                                <input type="text">
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="col-sm-6">
                                <h5>Email*</h5>
                            </div>
                            <div class="col-sm-6">
                                <input type="text">
                            </div>
                        </div>

                        <div class="col-sm-12 check">
                            <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                            <label class="checkbox" for="vehicle1">Join Nikeplus and save your delivery details for faster
                                checkout.</label><br>
                        </div>

                        <div class="col-sm-12">
                            <h5 class="member marbtt">Already a member? <u> Sign in</u></h5>
                        </div>

                        <div class="col-sm-12 check backcol">
                            <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                            <label for="vehicle1">I have read and consent to eShopWorld processing my information indsf
                                dsfds fsdfd sfdsf</label>
                        </div>

                        <div class="col-sm-12">
                            <div class="col-sm-6 redpad">
                                <h6>Required Fields</h6>
                            </div>

                            <div class="col-sm-6 donebut">
                                <Button>Done</Button>
                            </div>
                        </div>



                    </div>
                </div>

                <div class="col-sm-4 sumpad">
                    <div class="col-sm-12 bor">
                        <h4>Summary</h4>
                    </div>

                    <div class="col-sm-12 sumborder">

                        <div class="col-sm-12">
                            <div class="col-sm-6">
                                <h5>Subtotal</h5>
                            </div>
                            <div class="col-sm-6 marleft">
                                <h5>$123.00</h5>
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="col-sm-6 spcmargin">
                                <h5>Shipping & Handling</h5>
                            </div>
                            <div class="col-sm-6 marleft colorred">
                                <h5>FREE</h5>
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="col-sm-6">
                                <h5>Taxes</h5>
                            </div>
                            <div class="col-sm-6 marleft">
                                <h5>PKR 100</h5>
                            </div>
                        </div>


                        <div class="col-sm-12">
                            <div class="col-sm-6">
                                <h3>Total</h3>
                            </div>
                            <div class="col-sm-6 marleft colorred">
                                <h3>$123.00</h3>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-12 detailsbor">
                        <h5>Shipping & Delivery</h5>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quasi, inventore dolorem? Officiis
                            mollitia deserunt atque ut excepturi quibusdam modi impedit?</p>
                        <h6>See Details</h6>
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