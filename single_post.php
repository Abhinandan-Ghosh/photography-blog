<?php  include('config.php'); ?>
<?php  include('includes/functions.php'); ?>
<?php 
	if (isset($_GET['post-slug'])) {
		$post = getPost($_GET['post-slug']);
	}
	$topics = getAllTopics();
?>
<?php include('includes/head_section.php'); ?>
<title> <?php echo $post['title'] ?> | THE BLOOOOG</title>
</head>
<body>
	<!-- Navbar -->
		<?php include( ROOT_PATH . '/includes/navbar.php'); ?>
	<!-- // Navbar -->
<div class="container">
	
	
	<div class="content d-flex justify-content-start" >
		<!-- Page wrapper -->
		<div class="post-wrapper">
			<!-- full post div -->
			<div class="full-post-div">
				<h1 class="post-title display-4 font-weight-bold"><?php echo $post['title']; ?></h1>
				<img class='img-fluid single-post-img' src="<?php echo BASE_URL . '/static/' . $post['image']; ?>" class="mx-auto d-block">
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
		<div class="post-sidebar d-flex justify-content-end">
			<div class="card topic-side-bar">
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
		<!-- // post sidebar -->
	</div>
</div>
<!-- // content -->

<?php include( ROOT_PATH . '/includes/footer.php'); ?>