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
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                  data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
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


  <section class="cart">
    <div class="container">
      <div class="col-sm-12 col-xs-12">
        <div class="table-responsive">
          <table class="table">
            <thead>
              <tr>
                <th scope="col">Article</th>
                <th scope="col"></th>
                <th scope="col">Quantity</th>
                <th scope="col">Size</th>
                <th scope="col">Material</th>
                <th scope="col">Price</th>
                <th scope="col">Total</th>
              </tr>
            </thead>
            <tbody>
              <tr class="row1">
                <th class="productImage" scope="row"><img src="images/cartpic.jpg" alt=""></th>
                <td>
                  <h4><b>Heading Goes Here</b></h4>
                </td>
                <td>
                  <input class="wid" type="number">
                </td>
                <td><select name="Vehicles" id="cars">
                    <option value="Select a Province">Size</option>
                    <option value="Bus">1</option>
                    <option value="Bike">2</option>
                    <option value="Collora">3</option>
                    <option value="Mehran">4</option>
                    <option value="City">5</option>
                  </select>
                </td>
                <td class="detailscart"><B>Gems</B></td>
                <td class="detailscart"><B>13.99 $</B></td>
                <td class="detailscart"><B>13.09 $</B></td>
              </tr>
              <tr>
                <th class="productImage" scope="row"><img src="images/cartpic.jpg" alt=""></th>
                <td>
                  <h4><b>Heading Goes Here</b></h4>
                </td>
                <td>
                  <input class="wid" type="number">
                </td>
                <td><select name="Vehicles" id="cars">
                    <option value="Select a Province">Size</option>
                    <option value="Bus">1</option>
                    <option value="Bike">2</option>
                    <option value="Collora">3</option>
                    <option value="Mehran">4</option>
                    <option value="City">5</option>
                  </select>
                </td>
                <td class="detailscart"><B>Gems</B></td>
                <td class="detailscart"><B>13.99 $</B></td>
                <td class="detailscart"><B>13.09 $</B></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </section>

  <section class="total">
    <div class="container">
      <div class="row">
        <div class="col-sm-5">

        </div>

        <div class="col-sm-7">
          <div class="col-sm-2 nopadding">
            <p class="bld">Delivery Cost
            <p>
          </div>

          <div class="col-sm-8">
            <p class="bld">This applies to standard delivery to Europe</p>
          </div>

          <div class="col-sm-2 colorred">
            <p>4.00$</p>
          </div>
        </div>
      </div>


    </div>

    <div class="container">
      <div class="row">
        <div class="col-sm-5">

        </div>

        <div class="col-sm-7">
          <div class="col-sm-1 nopadding">
            <h4 class="bld">Total *</h4>

          </div>

          <div class="col-sm-3 nopad">
            <p class="bld">including VAT</p>


          </div>

          <div class="col-sm-7 colorred">
            <h4 class="sopad">27.00$</h4>

            <div class="addcart buttonpad">
              <a href="checkoutt.html"><Button>CheckOut</Button></a>
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