<?php
include "../connect.php";


// session_start();
// if(count($_SESSION) == 0){
//   header("location:loginResult.php");
// }
// echo "Login Successfully";

if(isset($_POST) AND count($_POST) > 0){
    $email = $_POST['email'];
    $password = $_POST['passwordd'];


 $sql = "SELECT * FROM user where email = '".$email."' AND passwordd = '".$password."'";

 $result = mysqli_query($conn,$sql);

 if(mysqli_num_rows($result) > 0){
     $row = mysqli_fetch_assoc($result);
     if(isset($row) AND count($row)){
         echo "Login Done!";
         while($row = mysqli_fetch_array($result)){
            echo $row['ID'] . "<br/>";
            echo $row['firstname'] ."<br/>";
            echo $row['lastname'] ."<br/>";
            echo $row['email'] ."<br/>";
            echo $row['passwordd'] ."<br/>";
            echo $row['status'] ."<br/>";
            echo $row['createdon'];
        }
        //   $_Session['id'] = $row['id'];
        //   $_Session['name'] = $row['firstname']." ". $row['lastname'];
        //   $_Session['email'] = $row['email'];

        //   header("location:AdminPage");
     }
  }
     else{
         echo "Login Failed!";
     }
     die();
}


?>