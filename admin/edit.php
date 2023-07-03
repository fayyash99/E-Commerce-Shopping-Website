<?php
include "../connect.php";

// Edit Start
$id = $_GET['id'];
$qry = mysqli_query($conn,"select * from product1 where Prod_ID='".$id."'");
$data = mysqli_fetch_array($qry);
if(isset($_POST['update'])) // when click on Update button
{
    $Prod_Name =  $_POST['Prod_Name'];
    $Prod_Price =  $_POST['Prod_Price'];
    $Prod_Actual_Price = $_POST['Prod_Actual_Price'];
    $Prod_Pic =  $_POST['Prod_Pic'];
    $Prod_Status =  $_POST['Prod_Status'];

    $sql = "update product1 set Prod_Name='".$Prod_Name."', Prod_Price='".$Prod_Price."',Prod_Actual_Price='".$Prod_Actual_Price."',Prod_Pic='".$Prod_Pic."',Prod_Status='".$Prod_Status."' where Prod_ID='".$id."'";

    $edit = mysqli_query($conn,$sql);
    
	
    if($edit)
    {
        header("location:product1.php"); // redirects to all records page
        exit;
    }
    else
    {
        echo mysqli_error();
    }    	
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Page</title>

        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<div class="Product1_form">
    <div class="container">
        <div class="row">

            <div class="col-md-6 Add_form">
                <form action="product1.php" method="POST">
                    <div class="form-group">
                        <label for="exampleproductname">Product Name</label>
                        <input type="text" name="Prod_Name" value="<?php echo $data['Prod_Name'] ?>" required class="form-control" placeholder="Enter Product Name" size="40"><br>
                    </div>
                    <div class="form-group">
                        <label for="exampleproductprice">Product Price</label>
                        <input type="text" name="Prod_Price" value="<?php echo $data['Prod_Price'] ?>" required class="form-control" placeholder="Enter Product Price" size="40"><br>
                    </div>
                    <div class="form-group">
                        <label for="labelprice">Product Label Price</label>
                        <input type="text" name="Prod_Actual_Price" value="<?php echo $data['Prod_Actual_Price'] ?>" required class="form-control" placeholder="Enter Product Label Price" size="40"><br>
                    </div>
                    <!-- <div class="form-group">
                        <label for="exampleproductdescription">Product Description</label>
                        <textarea name="Prod_Desc" rows="15" cols="40" required class="form-control" placeholder="Enter Product Description"></textarea><br>
                    </div> -->
                    <div class="form-group">
                        <label for="exampleproductimage">Product Image</label>
                        <input type="text" name="Prod_Pic" value="<?php echo $data['Prod_Pic'] ?>" required class="form-control" placeholder="Enter Product Image" size="40"><br>
                    </div>
                    <div class="form-group">
                        <label for="examplestatus">Status</label><br>
                        <select class="form-control" name="Prod_Status" value="<?php echo $data['Prod_Status'] ?>">
                        <?php if($data['Prod_Status']=='1'){ ?>
                                        <option value="1">Active</option>
                                        <option value="0">In-Active</option>
                                    <?php } 

                                     else{ ?>
                                        <option value="0">In-Active</option>
                                        <option value="1">Active</option>
                                    <?php } ?>
                        </select><br>
                    </div>
                    <button type="submit" name="update" value="Update" class="btn btn-primary">Update</button>
                </form><br>
                <a href="ProductList.php"><button class="btn btn-primary">Cancel</button></a><br>
            </div>
        </div>
    </div>
</div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>    
    <script src="css/bootstrap.min.js"></script>
</body>
</html>

