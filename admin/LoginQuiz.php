
<?php
include "../connect.php";
// session_start();
$error = "";
if(isset($_POST) AND count($_POST) > 0){
  $email = $_POST['email'];
  $passwordd = $_POST['passwordd'];


  $sql = "SELECT * FROM user where email = '".$email."' AND passwordd = '".$passwordd."'";
  // print_r($sql); die;

  $result = mysqli_query($conn,$sql);

  if(mysqli_num_rows($result) > 0){
      $row = mysqli_fetch_assoc($result);
      if(isset($row) AND count($row)){
          echo "Login Done!";
          $_SESSION['id'] = $row['ID'];
          $_SESSION['name'] = $row['firstname']. " ". $row['lastname'];
          $_SESSION['firstname'] = $row['firstname'];
          $_SESSION['lastname'] = $row['lastname'];
          $_SESSION['profile_img'] = $row['profile_Img'];
          $_SESSION['email'] = $row['email'];

          // header("location:loginResult.php");
      }
      else{
        $error = "Login Failed!";
      }
  }
}

?>
<html>
<form action="loginResult.php" method="post" encctype="multipart/form-data">
    <input type="email" name="email" placeholder="Enter your Email" size="40"><br>
    <input type="text" name="passwordd" placeholder="Enter your Password" size="40"><br>
    <button>Login</button>
</form>
</html>