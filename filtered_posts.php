<?php include('config.php'); ?>
<?php include('includes/functions.php'); ?>
<?php include('includes/head_section.php'); ?>
<?php 
	// Get posts under a particular topic
	if (isset($_GET['topic'])) {
		$topic_id = $_GET['topic'];
		$posts = getPublishedPostsByTopic($topic_id);
	}
?>
	<title>LifeBlog | Home </title>
</head>
<body>

<!-- Navbar -->
	<?php include( ROOT_PATH . '/includes/navbar.php'); ?>
<!-- // Navbar -->
<!-- content -->
<div class="container content">
	<h2 class="content-title">
		Articles on <u><?php echo getTopicNameById($topic_id); ?></u>
	</h2>
	<hr>
	<?php
//Columns must be a factor of 12 (1,2,3,4,6,12)
$numOfCols = 3;
$rowCount = 0;
$bootstrapColWidth = 12 / $numOfCols;
?>




<div class="row ">




<?php foreach ($posts as $post): ?>
      <div class="col card posts">
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
</div>


  <!-- footer -->
<?php include( ROOT_PATH . '/includes/footer.php') ?>
</body>
    
</html>