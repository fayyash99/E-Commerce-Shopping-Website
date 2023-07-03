<?php
  include "../connect.php";

  session_start();

  if(isset($_POST) AND count($_POST) > 0){
    $firstname =  $_POST['firstname'];
    $lastname =  $_POST['lastname'];
    $email =  $_POST['email'];
    $passwordd =  $_POST['passwordd'];
    $Statuss = $_POST['Statuss'];

    $sql = "INSERT into usertest (firstname,lastname,email,passwordd,Statuss) VALUES ('".$firstname."','".$lastname."','".$email."','".$passwordd."','".$Statuss."')";

    if (mysqli_query($conn,$sql)){
        $status = true;
        // echo "inserted";
    }
    else {
        $status = false;
        // echo "error";
    }
  }

$usertest_sql = "SELECT * FROM usertest";
$usertest_result = mysqli_query($conn,$usertest_sql);

$usertest1_sql = "SELECT * FROM usertest where Statuss=1";
$usertest1_result = mysqli_query($conn,$usertest1_sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz</title>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<script
src="https://code.jquery.com/jquery-3.6.0.js"
integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
crossorigin="anonymous"></script>
</head>
<body>
<div class="userquiz_form">
        <div class="container">
            <div class="row">

                <div class="col-md-6 Add_form">
                    <?php 
                    if(isset($status)){
                        if($status == True){?> 
                            <div class="alert alert-success" role="alert">
                                <?php echo "Insert Successfully";?>
                            </div>
                            <?php
                            }

                        else{?>
                            <div class="alert alert-danger" role="alert">
                                <?php echo "Error Found"; ?>
                            </div>
                            <?php 
                        }
                    }
                    ?>
                        <form action="UserQuiz.php" method="POST">
                            <div class="form-group">
                                <label for="examplefirstname">First Name</label>
                                <input type="text" name="firstname" required class="form-control" placeholder="Enter First Name" size="40"><br>
                            </div>
                            <div class="form-group">
                                <label for="examplelastprice">Last Name</label>
                                <input type="text" name="lastname" required class="form-control" placeholder="Enter Last Name" size="40"><br>
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" name="email" required class="form-control" placeholder="Enter Email" size="40"><br>
                            </div>
                            <div class="form-group">
                                <label for="examplepassword">Password</label>
                                <input type="password" name="passwordd" required class="form-control" placeholder="Enter Password" size="40"><br>
                            </div>
                            <div class="form-group">
                                <label for="examplestatus">Status</label>
                                <select class="form-control" name="Statuss">
                                    <option value="1">Active</option>
                                    <option value="0">In-Active</option>
                                </select><br><br>
                            </div>
                            <button type="submit" class="btn btn-primary">Add User</button>
                        </form>
                </div>

                <div class="col-md-6 view_Data">
                    <?php
				    if(isset($_GET['delete_success'])){
					    if($_GET['delete_success'] == 1) {
					    ?>
					<div class="alert alert-danger">
						<strong>User Deleted</strong>
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
				    } ?>
				

                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">First Name</th>
                                <th scope="col">Last NAme</th>
                                <th scope="col">Email</th>
                                <th scope="col">Password</th>
                                <th scope="col">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                                <?php
                                    if(mysqli_num_rows($usertest_result) > 0)
                                    {
                                        while($row = mysqli_fetch_array($usertest_result))
                                        {
                                        ?>
                                            <tr>
                                                <th scope="row"><?php echo $row['ID'];?></th>
                                                <td><?php echo $row['firstname'];?></td>
                                                <td><?php echo $row['lastname'];?></td>
                                                <td><?php echo $row['email'];?></td>
                                                <td><?php echo $row['passwordd'];?></td>
                                                <td><?php echo $row['Statuss'];?></td>
                                                <td>
                                                    <a href="" class="btn btn-primary">Edit</a>
                                                    <a href="" data-href="deleteQuiz.php?id=<?php echo $row['ID'];?>" class="btn btn-danger delete_this_item">Delete</a>
                                                </td>
                                            </tr>
                                        <?php
                                        }
                                    }
                                    ?>
                        </tbody>
                    </table>
                </div><br> <br>

                <div class="col-md-6 view_Data">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">Active User</th>
                            </tr>
                            <tr>
                            <th scope="col">ID</th>
                                <th scope="col">First Name</th>
                                <th scope="col">Last NAme</th>
                                <th scope="col">Email</th>
                                <th scope="col">Password</th>
                                <th scope="col">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                                <?php
                                    if(mysqli_num_rows($usertest1_result) > 0)
                                    {
                                        while($row = mysqli_fetch_array($usertest1_result))
                                        {
                                        ?>
                                            <tr>
                                                <th scope="row"><?php echo $row['ID'];?></th>
                                                <td><?php echo $row['firstname'];?></td>
                                                <td><?php echo $row['lastname'];?></td>
                                                <td><?php echo $row['email'];?></td>
                                                <td><?php echo $row['passwordd'];?></td>
                                                <td><?php echo $row['Statuss'];?></td>
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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>    
    <script src="css/bootstrap.min.js"></script>
</body>
</html>