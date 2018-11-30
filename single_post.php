<?php  include('config.php'); ?>
<?php  include('includes/functions.php'); ?>
<?php 
	$page = "single-post";
	if (isset($_GET['post-slug'])) {
		$post = getPost($_GET['post-slug']);
		$title = $post['title'];
	}
	$topics = getAllTopics();
?>
<?php include('includes/head_section.php'); ?>
<title> <?php echo $post['title'] ?> | THE BLOOOOG</title>

<body>
	<!-- Navbar -->
		<?php include( ROOT_PATH . '/includes/navbar.php'); ?>
	<!-- // Navbar -->
<div class="container " >
    <h1 class="post-title display-4 font-weight-bold col-md-12"><?php echo $post['title']; ?></h1>
	<!--<div class="content d-flex justify-content-start" >-->
    <div class="row">
    <div class="content d-flex justify-content-start col-md-8" >
		<!-- Page wrapper -->
		<div class="post-wrapper">
			<!-- full post div -->
			<div class="full-post-div ">
				
				<a href="<?php echo BASE_URL . '/static/' . $post['image']; ?>" data-fancybox ><img class='img-fluid single-post-img' src="<?php echo BASE_URL . '/static/' . $post['image']; ?>" class="mx-auto d-block"></a>
				<div class="post-body-div">
					<?php echo html_entity_decode($post['body']); ?>
				</div>
			
			</div>
			<!-- // full post div -->
			
			<!-- comments section -->
			<!--  coming soon ...  -->
		</div>
		<!-- // Page wrapper -->

		<!-- post sidebar -->
		
		<!-- // post sidebar -->
	</div>

<!--<div class="post-sidebar d-flex  col-md-4">-->
    <div class= "content d-flex justify-content-center col-md-4">
			<div class="card" style="
    width: 350px;

    height: fit-content;
">
				<div class="card-header text-light bg-dark">
					<h2>Topics</h2>
				</div>
				<div class="card-content text-center">
					<?php foreach ($topics as $topic): ?>
						<a 
							href="<?php echo BASE_URL . 'filtered_posts.php?topic=' . $topic['id'] ?>">
							<?php echo $topic['name'].'<br>'; ?>
						</a> 
					<?php endforeach ?>
				</div>
			</div>
		</div>
<!-- // content -->
    </div>
    </div>
<?php include( ROOT_PATH . '/includes/footer.php'); ?>