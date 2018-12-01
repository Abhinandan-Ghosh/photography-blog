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

<div class="wrapper">

        <nav id="sidebar">
            <!-- Sidebar Header -->
            <div class="sidebar-header">
                <h3>Collapsible Sidebar</div>
            </div>

            <!-- Sidebar Links -->
            <ul class="list-unstyled components">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><!-- Link with dropdown items -->
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false">Pages</a>
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                        <li><a href="#">Page</a></li>
                        <li><a href="#">Page</a></li>
                        <li><a href="#">Page</a></li>
                    </ul>
                <li><a href="#">Portfolio</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </nav>

        <div id="content">
            <button type="button" id="sidebarCollapse" class="navbar-btn">
                <span></span>
                <span></span>
                <span></span>
            </button>
        <div>

</div>