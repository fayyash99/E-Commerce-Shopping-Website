<?php
include "../connect.php";

session_start();

if(isset($_GET) AND count($_GET) > 0){
	$id = $_GET['id'];

	$sql = "DELETE FROM usertest WHERE ID=$id";
	

	if(mysqli_query($conn,$sql)){
		header("location:UserQuiz.php?delete_success=1");	
	}
	else {
		header("location:UserQuiz.php?delete_success=0");	
	}
}



?>