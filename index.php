<?php include('includes/config.php') ?>
<?php 

	$sql = "SELECT * FROM posts WHERE published=1";

	$result = mysqli_query($db, $sql);

	// fetch all posts from database
	// return them as an associative array called $posts
	$posts = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Simple Blogging application - Home</title>

	<?php include('includes/header.php') ?>

		<?php include('includes/banner.php') ?>
		
 		<!-- content -->
		<div class="content clearfix">

			<div class="posts-wrapper">
				<div class="post">
					<img src="assets/images/reading1.jpg" alt="">
					<h2>This is the first post</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis iure, ducimus dolor fuga maiores explicabo eligendi quibusdam sequi, quas architecto</p>
					<div class="post-info clearfix">
						<div class="author">
							By <strong>Awa Melvine</strong> on Feb 18, 2017
						</div>
						<div class="readmore">
						<a href="single.php" class="btn">Read more</a>
						</div>
					</div>

				</div>
				<div class="post">
					<img src="assets/images/reading2.jpg" alt="">
					<h2>This is the first post</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis iure, ducimus dolor fuga maiores explicabo eligendi quibusdam sequi, quas architecto</p>
					<div class="post-info clearfix">
						<div class="author">
							By <strong>Awa Melvine</strong> on Feb 18, 2017
						</div>
						<div class="readmore">
						<a href="single.php" class="btn">Read more</a>
						</div>
					</div>

				</div>
			</div>
			<!-- end posts-wrapper -->

			<!-- sidebar -->
			<div class="sidebar" >
				<form class="register_form" action="" style="width: 80%;" >
					<input type="search" name="username" placeholder="Search ...">
					<button class="btn" type="submit">Search</button>
				</form>

				<ul class="categories">
					<h2>Categories</h2>
				  <li><a class="active" href="#home">Home</a></li>
				  <li><a href="#news">News</a></li>
				  <li><a href="#contact">Contact</a></li>
				  <li class="right"><a href="#about">About</a></li>
				</ul>


			</div>
			<!-- end sidebar -->

		</div>
		<!-- end content -->
 
	<?php include('includes/footer.php') ?>		
