<!-- The first include should be config.php -->
<?php require_once('config.php') ?>

<?php require_once( ROOT_PATH . '/includes/head_section.php') ?>

    <title>Blog</title>
  </head>
  <body>
 
 <!-- navbar -->
<?php include( ROOT_PATH . '/includes/navbar.php') ?>

    <div class="jumbotron jumbotron-fluid jumbo1">
  <div class="container">
    <h1 class="display-4 ">THE BLOOGGGGG</h1>
    <p class="lead">Info about the blog</p>
  </div>
</div>

<div class="jumbotron jumbotron-fluid jumbo2 text-center ">
  
    <h1 class="display-4">Want to stay updated?</h1>
    <p class="lead">Subscibe to our newsletter and get emails</p>
    <form action="subscribe.php">
    <button type="submit" class="btn btn-light">Subscribe</button>
    </form>
 
</div>

<div class="content container">
      <h2 class="content-title">Recent Articles</h2>
      <hr>
      <!-- more content still to come here ... -->
    </div>
    <!-- // Page content -->
  </div>


<!-- footer -->
<?php include( ROOT_PATH . '/includes/footer.php') ?>

    
</html>