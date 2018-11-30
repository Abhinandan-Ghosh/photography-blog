<?php
session_start();
error_reporting(0);
include('config.php');
$userprofile = $_SESSION['user_name'];
if($userprofile==true){

}
else{
	header('location:adminlogin.php');

}
echo "Welcome ".$_SESSION['user_name'];
?>

<a href="adminlogout.php">LogOut</a>