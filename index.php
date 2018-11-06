<!-- The first include should be config.php -->
<?php require_once('config.php') ?>

<?php require_once( ROOT_PATH . '/includes/functions.php') ?>

<!-- Retrieve all posts from database  -->
<?php $posts = getPublishedPosts(); ?>

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

<?php
//Columns must be a factor of 12 (1,2,3,4,6,12)
$numOfCols = 3;
$rowCount = 0;
$bootstrapColWidth = 12 / $numOfCols;
?>




<div class="row ">




<?php foreach ($posts as $post): ?>
      <div class="col-md-4 card posts">
  <img class="card-img-top" src="<?php echo BASE_URL . '/static/' . $post['image']; ?>" alt="Card image cap">
  <?php if (isset($post['topic']['name'])): ?>
      <a 
        href="<?php echo BASE_URL . 'filtered_posts.php?topic=' . $post['topic']['id'] ?>"
        >
        <?php echo $post['topic']['name'] ?>
      </a>
    <?php endif ?>
   <a href="single_post.php?post-slug=<?php echo $post['slug']; ?>">
  <div class="card-body">
    <h3 class="card-title"><h3><?php echo $post['title'] ?></h3></h3>
    
    <p class="card-text"><small class="text-muted"><span><?php echo date("F j, Y ", strtotime($post["created_at"])); ?></span>
                <span class="read_more float-right">Read more...</span></small></p>
  </div>
  </a>
</div>

 <?php
    $rowCount++;
    if($rowCount % $numOfCols == 0) echo '</div><div class="row">';

?>

   <?php endforeach ?>

   
    <!-- // Page content -->
  </div>
  


<!-- footer -->
<?php include( ROOT_PATH . '/includes/footer.php') ?>

    
</html>