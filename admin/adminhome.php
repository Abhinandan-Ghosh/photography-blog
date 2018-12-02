<?php
session_start();
error_reporting(0);
include('../config.php');
$userprofile = $_SESSION['user_name'];
if($userprofile==true){
    global $conn;
    $sql = "SELECT name,email,subject,message FROM messages";
    $result = mysqli_query($conn, $sql);
    $messages = mysqli_fetch_all($result, MYSQLI_ASSOC);
	// fetch all posts as an associative array called $posts
	
}
else{
	header('location:adminlogin.php');

}

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Admin Dashboard</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="adminstyle.css">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

</head>

<body>

    <div class="wrapper">
        <!-- Sidebar Holder -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3>Admin Dashboard</h3>
            </div>

            <ul class="list-unstyled components">
                <p class="bottom-border"><?php echo "Welcome ".$_SESSION['user_name'];?></p>
                <li class="active">
                    <a href="../index.php">Home</a>
                </li>
                <li>
                    <a href="../index.php#recentarticles">Articles</a>
                </li>
                <li>
                    <a href="../about.php">About</a>
                </li>
            </ul>
        </nav>

        <!-- Page Content Holder -->
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="navbar-btn btn-dark">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                    <div>
                        <ul class="nav navbar-nav ml-auto">
                            <li>
                                <button class="btn btn-dark" ><a href="adminlogout.php">Logout</a></button>
                            </li>
                        </ul>    
                    </div>
                </div>
            </nav>

           
            <div class = "table-responsive">
            <table class="table table-striped table-dark">
                <thead class="thead-dark">
                <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Subject</th>
                <th scope="col">Message</th>
                </tr>
                </thead>
                
                
                <?php 
                $count = 1;
                foreach ($messages as $message): ?>
                    
                <tr>
                <th scope="row"><?php echo $count;?></th>
                <td><?php echo $message['name'];?></td>
                <td><?php echo $message['email'];?></td>
                <td><?php echo $message['subject'];?></td>
                <td ><?php echo $message['message'];?></td>
                </tr>
<?php
$count++;
 endforeach; ?>
               
            </table>
            </div>
        </div>
    </div>

<?php echo mysqli_num_rows($result) ?>

    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
                $(this).toggleClass('active');
                
            });
        });
    </script>
</body>

</html>