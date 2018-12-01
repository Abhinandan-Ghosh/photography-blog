<?php 
session_start();
error_reporting(0);

require_once('../config.php');?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Admin Login</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="adminstyle.css">
</head>
<body>
<div class="login-form">    
    <form  method="post">
		<div class="avatar"><i class="material-icons">&#xE7FF;</i></div>
    	<h4 class="modal-title">Admin Login</h4>
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Username" required="required" name = "username">
        </div>
        <div class="form-group">
            <input type="password" class="form-control" placeholder="Password" required="required" name = "password">
        </div>

        <?php
if (isset($_POST['submit']))
{
    $user = $_POST['username'];
    $pwd = $_POST['password'];
    $query = "select * from admin where username = '$user' && password = '$pwd'";
    $data = mysqli_query($conn,$query);
    $total = mysqli_num_rows($data);
    if($total==1)
    {
        $_SESSION['user_name']=$user;
        header('location: adminhome.php');
    }
    else{
        echo "<div class='alert alert-danger'>
  <strong>Error!</strong> Incorrect username or password.
</div>";
    }
}

?>
        
        <input type="submit" class="btn btn-primary btn-block btn-lg" value="Login" name = "submit">              
    </form>			
    
</div>



</body>
</html>     

