<!-- The first include should be config.php -->
<?php 
    require_once('config.php');
    require_once( ROOT_PATH . '/includes/functions.php');
//Retrieve all posts from database 
    $posts = getPublishedPosts();

    $page = 'home';
      $title = 'Picture Perfect - Home';

    require_once( ROOT_PATH . '/includes/head_section.php');
?>

<body>
<!-- navbar -->
<?php include( ROOT_PATH . '/includes/navbar.php') ?>
<div class="jumbotron jumbotron-fluid jumbo1">
  
    <div class="container">
        <h1 class="display-3 animated fadeInLeft">Picture Perfect</h1>
        <p class="lead animated fadeInRight delay-1s">A Glance From Our Perspective</p>
    </div>
</div>
<div class="jumbotron jumbotron-fluid jumbo2 text-center" id="subscribe">
    <h1 class="wow flipInX display-4">Want to stay updated?</h1>
    <p class="lead wow flipInX" >Subscibe to our newsletter and get emails</p>
    <a href="subscribe.php" class="btn btn-light" data-toggle="modal" data-target="#modalSubscriptionForm">Subscribe</a>
</div>
<div class="container-fluid" id="recentarticles">
    <!-- <center><h1>Recent Posts</h1></center>
    <br>
    <hr> -->
    <div class="card-columns post-body ">
        <?php foreach($posts as $post): ?>
        <div class="card posts m-3 wow fadeIn">
            <a href="<?php echo BASE_URL . '/static/' . $post['image']; ?>" data-fancybox data-caption = "<?php echo $post['title'] ?>" ><img class="card-img-top" src="<?php echo BASE_URL . '/static/' . $post['image']; ?>" alt="Card image cap"></a>
            <?php if (isset($post['topic']['name'])): ?>
            <a href="<?php echo BASE_URL . 'filtered_posts.php?topic=' . $post['topic']['id'] ?>" ><?php echo $post['topic']['name'] ?></a>
            <?php endif; ?>
            <a href="single_post.php?post-slug=<?php echo $post['slug']; ?>">
                <div class="card-body">
                    <h3 class="card-title"><?php echo $post['title'] ?></h3>
                    <p class="card-text">
                        <small class="text-muted">
                            <span><?php echo date("F j, Y ", strtotime($post["created_at"])); ?></span>
                            <span class="read_more float-right">Read more...</span>
                        </small>
                    </p>
                </div>
            </a>
        </div>
        <?php endforeach; ?>
        
    </div>
</div>
<!-- footer -->
<?php include( ROOT_PATH . '/includes/footer.php') ?>


<!--Subscription Modal-->    
<div class="modal fade" id="modalSubscriptionForm" tabindex="+1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold" style="padding-left: 32px;">Subscribe!</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">
        <div class="md-form mb-5">
          <i class="fa fa-user prefix grey-text"></i>
          <label data-error="wrong" data-success="right" for="form3">Your name</label>
          <input type="text" id="form3" class="form-control validate">
          
        </div>

        <div class="md-form mb-4">
          <i class="fa fa-envelope prefix grey-text"></i>
          <label data-error="wrong" data-success="right" for="form2">Your email</label>
          <input type="email" id="form2" class="form-control validate">
          
        </div>

      </div>
      <div class="modal-footer d-flex justify-content-center">
        <button class="btn btn-dark">Send</button>
      </div>
    </div>
  </div>
</div>
