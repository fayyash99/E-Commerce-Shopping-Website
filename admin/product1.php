<?php
  include "../connect.php";

  session_start();


  if(count($_SESSION) == 0){
    header("location:Login.php");
  }

  $msg = '';
  if(isset($_POST) AND COUNT($_POST) > 0){
    $Prod_Name =  $_POST['Prod_Name'];
    $Prod_Price =  $_POST['Prod_Price'];
    $Prod_Actual_Price = $_POST['Prod_Actual_Price'];
    $Prod_Desc =  htmlentities($_POST['Prod_Desc']);
    $Prod_Pic =  $_POST['Prod_Pic'];
    $Prod_Status =  $_POST['Prod_Status'];


    $sql = "INSERT into product1 (Prod_Name,Prod_Price,Prod_Actual_Price,Prod_Desc,Prod_Pic,Prod_Status) VALUES 
    ('".$Prod_Name."','".$Prod_Price."','".$Prod_Actual_Price."','".$Prod_Desc."','".$Prod_Pic."','".$Prod_Status."')";

    if (mysqli_query($conn,$sql)){
        $status = true;
        $msg = "Product Inserted";
    }
    else {
        $status = false;
        $msg = "Error Found";
    }
  }

  $product_sql = "SELECT * FROM product1";
  $producy_result = mysqli_query($conn,$product_sql);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Product1 Form</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css">

    	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<script
src="https://code.jquery.com/jquery-3.6.0.js"
integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
crossorigin="anonymous"></script>
</head>
<body>

<!-- -----------1st PHP Start Top_bar Heading----------- -->
<?php include "top_bar.php";?>
<!-- -----------1st PHP End----------- -->

<?php   include ("navBar.php") ?>

<!-- -----------PHP Start Product_form and List----------- -->
    <div class="Product1_form">
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
                        <form action="product1.php" method="POST">
                            <div class="form-group">
                                <label for="exampleproductname">Product Name</label>
                                <input type="text" name="Prod_Name" required class="form-control" placeholder="Enter Product Name" size="40"><br>
                            </div>
                            <div class="form-group">
                                <label for="exampleproductprice">Product Price</label>
                                <input type="text" name="Prod_Price" required class="form-control" placeholder="Enter Product Price" size="40"><br>
                            </div>
                            <div class="form-group">
                                <label for="labelprice">Product Label Price</label>
                                <input type="text" name="Prod_Actual_Price" required class="form-control" placeholder="Enter Product Label Price" size="40"><br>
                            </div>
                            <div class="form-group">
                                <label for="exampleproductdescription">Product Description</label>
                                <textarea name="Prod_Desc" rows="15" cols="40" required class="form-control" placeholder="Enter Product Description"></textarea><br>
                            </div>
                            <div class="form-group">
                                <label for="exampleproductimage">Product Image</label>
                                <input type="text" name="Prod_Pic" required class="form-control" placeholder="Enter Product Image" size="40"><br>
                            </div>
                            <div class="form-group">
                                <label for="examplestatus">Status</label><br>
                                <select class="form-control" name="Prod_Status">
                                    <option value="Active">Active</option>
                                    <option value="InActive">In-Active</option>
                                </select><br>
                            </div>
                            <button type="submit" class="btn btn-primary">Add Product</button>
                        </form>
                </div>

                <div class="col-md-6 view_Data">
                    <?php
				    if(isset($_GET['delete_success'])){
					    if($_GET['delete_success'] == 1) {
					    ?>
					<div class="alert alert-danger">
						<strong>Product Deleted</strong>
					</div>
					<?php
					}
					else {
					?>
					<div class="alert alert-warning">
						<strong>Error Found</strong>
					</div>
					<?php
					}
				}
				?>

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
                                                <th scope="row"><?php echo $row['Prod_ID'];?></th>
                                                <td><?php echo $row['Prod_Name'];?></td>
                                                <td><?php echo $row['Prod_Price'];?></td>
                                                <td>
                                                    <a href="edit.php?id=<?php echo $row['Prod_ID']; ?>" type="button" class="btn btn-primary">Edit</a>
                                                    <a href="#" data-href="delete.php?id=<?php echo $row['Prod_ID'];?>" class="btn btn-danger delete_this_item">Delete</a>
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

<script type="text/javascript">
$(".delete_this_item").click(function(){
    if(confirm("Are you sure to delete this?")){
		//$(this).data('href')
		//$(this).attr("data-href");
		window.location = $(this).data('href');
	}
});
</script>
<!-- -----------PHP End----------- -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>    
    <script src="css/bootstrap.min.js"></script>
</body>
</html>