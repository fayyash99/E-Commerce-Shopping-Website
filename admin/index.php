<?php
include "../connect.php";
// session_start();

if(count($_SESSION) == 0){
	header("location:Login.php");	
}


$sql ="SELECT COUNT(*) as count FROM user";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);
$user_count = $row['count'];


$sql ="SELECT COUNT(*) as count FROM product1";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);
$product_count = $row['count'];

$sql ="SELECT COUNT(*) as count FROM banner";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);
$banner_count = $row['count'];
?>

<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>

	<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> -->

	<!-- Optional theme -->
	<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous"> -->

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />

	<link rel="stylesheet" type="text/css" href="css/adminstyle.css">
</head>
<body>

	<div class="container" style="margin-top: 2%">
  		<div class="row">
  			<div class="col-md-12">

  				<div class="col-md-3">
			      <div class="card-counter primary">
			        <i class="fa fa-code-fork"></i>
			        <span class="count-numbers"><?php echo $product_count?></span>
			        <span class="count-name">Products</span>
			      </div>
			    </div>

			    <div class="col-md-3">
			      <div class="card-counter danger">
			        <i class="fa fa-ticket"></i>
			        <span class="count-numbers"><?php echo $banner_count?></span>
			        <span class="count-name">Banner</span>
			      </div>
			    </div>

			    <div class="col-md-3">
			      <div class="card-counter success">
			        <i class="fa fa-users"></i>
			        <span class="count-numbers"><?php echo $user_count?></span>
			        <span class="count-name">Users</span>
			      </div>
			    </div>

			    <a href="Logout.php">
				    <div class="col-md-3">
				      <div class="card-counter info">
				        <i class="fa fa-database"></i>
				        <!-- <span class="count-numbers">35</span> -->
				        <span class="count-name">
				        	Logout
				    	</span>
				      </div>
				    </div>
				</a>

  			</div>	
		</div>
	</div>

</body>
</html>