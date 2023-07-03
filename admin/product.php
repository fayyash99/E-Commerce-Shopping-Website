<?php
include "../connect.php";
?>

<?php
$msg = '';
if(isset($_POST) AND COUNT($_POST) > 0){
    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];
    $product_label_price = $_POST['product_label_price'];
    $product_description =  htmlentities($_POST['product_description']);
    $product_image = $_POST['product_image'];
    $product_status = $_POST['product_status'];


    $sql = "INSERT INTO product (product_name,product_price,product_label_price,product_description,product_image,product_status) VALUES 
    ('".$product_name."','".$product_price."','".$product_label_price."','".$product_description."','".$product_image."','".$product_status."')";

    if (mysqli_query($conn,$sql)){
        $status = true;
        //echo "Product Inserted";
        $msg = "Product Inserted";
    }
    else {
        $status = false;
        //echo "Error Found";
        $msg = "Error Found";
    }
}

$product_sql = "SELECT * FROM product";
$producy_result = mysqli_query($conn,$product_sql);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Product Form</title>

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
      </div><br>
    </header>
<!-- -----------1st PHP End----------- -->

<!-- -----------2nd PHP Start Product_form and List----------- -->
    <div class="Product_form">
        <div class="container">
            <div class="row">

                <div class="col-md-6 Add_form">
                    <?php 
                    if(isset($status)){
                        if($status == True){?> 
                            <div class="alert alert-success" role="alert">
                                <?php echo $msg;?>
                            </div>
                            <?php
                            }

                        else{?>
                            <div class="alert alert-danger" role="alert">
                                <?php echo $msg; ?>
                            </div>
                            <?php 
                        }
                    }
                    ?>
                        <form action="product.php" method="POST">
                            <div class="form-group">
                                <label for="exampleproductname">Product Name</label><br>
                                <input type="text" name="product_name" required class="form-control" placeholder="Enter Product Name" size="40"><br>
                            </div>
                            <div class="form-group">
                                <label for="exampleproductprice">Product Price</label><br>
                                <input type="text" name="product_price" required class="form-control" placeholder="Enter Product Price" size="40"><br>
                            </div>
                            <div class="form-group">
                                <label for="labelprice">Product Label Price</label><br>
                                <input type="text" name="product_label_price" required class="form-control" placeholder="Enter Product Label Price" size="40"><br>
                            </div>
                            <div class="form-group">
                                <label for="exampleproductdescription">Product Description</label><br>
                                <textarea name="product_description" rows="15" cols="40" required class="form-control" placeholder="Enter Product Description"></textarea><br>
                            </div>
                            <div class="form-group">
                                <label for="exampleproductimage">Product Image</label><br>
                                <input type="text" name="product_image" required class="form-control" placeholder="Enter Product Image" size="40"><br>
                            </div>
                            <div class="form-group">
                                <label for="examplestatus">Status</label><br>
                                <select class="form-control" name="product_status">
                                    <option value="Active">Active</option>
                                    <option value="InActive">In_Active</option>
                                </select><br>
                            </div>
                            <button type="submit" class="btn btn-primary">Add Product</button>
                        </form>
                </div>

                <div class="col-md-6 view_Data">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Name</th>
                                <th scope="col">Price</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                                <?php
                                    if(mysqli_num_rows($producy_result) > 0)
                                    {
                                        while($row = mysqli_fetch_array($producy_result))
                                        {
                                        ?>
                                            <tr>
                                                <th scope="row"><?php echo $row['product_id'];?></th>
                                                <td><?php echo $row['product_name'];?></td>
                                                <td><?php echo $row['product_price'];?></td>
                                                <td>
                                                    <a href="#" type="button" class="btn btn-primary">Edit</a>
                                                    <a href="#" type="button" class="btn btn-danger">Delete</a>
                                                </td>
                                            </tr>
                                        <?php
                                        }
                                    }
                                    ?>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
<!-- -----------2nd PHP End----------- -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>    
    <script src="css/bootstrap.min.js"></script>
</body>
</html>