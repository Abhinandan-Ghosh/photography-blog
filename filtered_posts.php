<?php 
    require_once('config.php');
    require_once( ROOT_PATH . '/includes/functions.php');
//Retrieve all posts from database 
    $posts = getPublishedPosts();

    $page = 'filtered';
      $title = 'Topic';

    require_once( ROOT_PATH . '/includes/head_section.php');
?>
<?php 
	// Get posts under a particular topic
$page = "filtered post";
	if (isset($_GET['topic'])) {
		$topic_id = $_GET['topic'];
		$posts = getPublishedPostsByTopic($topic_id);
   
	}

?>
<title>LifeBlog | Home </title>


<body>

    <!-- Navbar -->
    <?php include( ROOT_PATH . '/includes/navbar.php'); ?>
    <!-- // Navbar -->
    <!-- content -->
    <div class="container content">
        <center>
            <h2 class="content-title">
                Posts on <u><?php echo getTopicNameById($topic_id); ?></u>
            </h2>
        </center>
        <hr>


        <div class="card-columns">

            <?php foreach($posts as $post): ?>
            <div class="card posts m-2">
                <a href="<?php echo BASE_URL . '/static/' . $post['image']; ?>" data-fancybox data-caption="<?php echo $post['title'] ?>"><img class="card-img-top" src="<?php echo BASE_URL . '/static/' . $post['image']; ?>" alt="Card image cap"></a>




                <div class="card-body">
                    <?php if (isset($post['topic']['name'])): ?>
                    <a class="float-right" href="<?php echo BASE_URL . 'filtered_posts.php?topic=' . $post['topic']['id'] ?>">
                        <?php echo $post['topic']['name'] ?>
                    </a>
                    <?php endif; ?>
                    <a href="single_post.php?post-slug=<?php echo $post['slug']; ?>">
                        <h3 class="card-title">
                            <?php echo $post['title'] ?>
                        </h3>

                        <p class="card-text">
                            <small class="text-muted">
                  <span><?php echo date("F j, Y ", strtotime($post["created_at"])); ?></span>
                  <span class="read_more float-right">Read more...</span>
                </small>
                        </p>
                    </a>
                </div>

            </div>
            <?php endforeach; ?>

        </div>
    </div>


    <!-- footer -->
    <?php include( ROOT_PATH . '/includes/footer.php') ?>
</body>


