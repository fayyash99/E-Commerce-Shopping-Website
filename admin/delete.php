<?php
include "../connect.php";
session_start();

if(count($_SESSION) == 0){
	header("location:Login.php");	
}

if(isset($_GET) AND count($_GET) > 0){
	$id = $_GET['id'];

	$sql = "DELETE FROM product1 WHERE Prod_ID=$id";
	

	if(mysqli_query($conn,$sql)){
		header("location:product1.php?delete_success=1");	
	}
	else {
		header("location:product1.php?delete_success=0");	
	}
}



?>