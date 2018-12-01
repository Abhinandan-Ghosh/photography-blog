<!-- The first include should be config.php -->
<?php 
    require_once('config.php');
    require_once( ROOT_PATH . '/includes/functions.php');
//Retrieve all posts from database 
    $posts = getPublishedPosts();

    $page = 'about';
      $title = 'Picture Perfect - About';

    require_once( ROOT_PATH . '/includes/head_section.php');
?>

  <body>
 
 <!-- navbar -->
<?php include( ROOT_PATH . '/includes/navbar.php') ?>

<div class="intro container-fluid">
<center>
<h1 class="abouttitle">
    Hello There!
    <br>
    <small>It's Nice to Meet You!</small>
</h1>
</center>  
</div> 
<div class="container-fluid abouttext">     
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint, explicabo dolores ipsam aliquam inventore corrupti eveniet quisquam quod totam laudantium repudiandae obcaecati ea consectetur debitis velit facere nisi expedita vel? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint, explicabo dolores ipsam aliquam inventore corrupti eveniet quisquam quod totam laudantium repudiandae obcaecati ea consectetur debitis velit facere nisi expedita vel? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint, explicabo dolores ipsam aliquam inventore corrupti eveniet quisquam quod totam laudantium repudiandae obcaecati ea consectetur debitis velit facere nisi expedita vel?</p>
</div>
      
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators ">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="container text-center">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="img-fluid rounded-circle" src="static/abhiboibig.jpg" alt="First slide" >
                <div class="user_text pb-3">
                    <p class="mbr-fonts-style display-7">Gotta insert some text here.Gotta insert some text here.Gotta insert some text here.</p>
                </div>
                <div class="user_name mbr-bold pb-2 mbr-fonts-style display-7">
                    Abhinandan Ghosh
                </div>
                <div class="user_desk mbr-light mbr-fonts-style display-7">
                     Photographer
                </div>
                <div class="social-links">
    <center>
        <a href="https://www.facebook.com/abhinandan.ghost" class="fa fu fa-facebook" target="_blank"></a>
        <a href="#" class="fa fu fa-twitter" target="_blank"></a>
        <a href="#" class="fa fu fa-google" target="_blank"></a>
        <a href="#" class="fa fu fa-linkedin" target="_blank"></a>
        <a href="#" class="fa fu fa-youtube" target="_blank"></a>
        <a href="https://www.instagram.com/abhinandan_ghost/" class="fa fu fa-instagram" target="_blank"></a>
    </center>    
</div> 
            </div>
            <div class="carousel-item">
            <!-- <img class="d-block w-100" src="static/mainphoto.JPG" alt="Second slide"> Original line of code -->
                <img class="img-fluid rounded-circle" src="static/calboibig.jpg" alt="Second slide">
                <div class="user_text pb-3">
                    <p class="mbr-fonts-style display-7">The world is but a canvas to our imagination - Henry David Thoreau</p>
                </div>
                <div class="user_name mbr-bold pb-2 mbr-fonts-style display-7">
                    Calvin Clint Dsouza
                </div>
                <div class="user_desk mbr-light mbr-fonts-style display-7">
                    Photographer
                </div>
                <div class="social-links">
    <center>
        <a href="https://www.facebook.com/calvin.clint.102" class="fa fu fa-facebook" target="_blank"></a>
        <a href="#" class="fa fu fa-twitter" target="_blank"></a>
        <a href="#" class="fa fu fa-google" target="_blank"></a>
        <a href="#" class="fa fu fa-linkedin" target="_blank"></a>
        <a href="#" class="fa fu fa-youtube" target="_blank"></a>
        <a href="https://www.instagram.com/cal_clint/" class="fa fu fa-instagram" target="_blank"></a>
    </center>    
</div> 
            </div>
            <div class="carousel-item">
                <img class="img-fluid rounded-circle" src="static/neoboibig.jpg" alt="Third slide">
                <div class="user_text pb-3">
                    <p class="mbr-fonts-style display-7">And Gotta insert some text here too.And Gotta insert some text here too.And Gotta insert some text here too.</p>
                </div>
                <div class="user_name mbr-bold pb-2 mbr-fonts-style display-7">
                    Thy Name
                </div>
                <div class="user_desk mbr-light mbr-fonts-style display-7">
                    Editor
                </div>
                <div class="social-links">
    <center>
        <a href="#" class="fa fu fa-facebook" target="_blank"></a>
        <a href="#" class="fa fu fa-twitter" target="_blank"></a>
        <a href="#" class="fa fu fa-google" target="_blank"></a>
        <a href="#" class="fa fu fa-linkedin" target="_blank"></a>
        <a href="#" class="fa fu fa-youtube" target="_blank"></a>
        <a href="#" class="fa fu fa-instagram" target="_blank"></a>
    </center>    
</div> 
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>      
    
<!-- footer -->      
<?php include( ROOT_PATH . '/includes/footer.php') ?>