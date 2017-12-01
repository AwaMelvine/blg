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


 		<!-- content -->
		<div class="content"  style="border: none;">

			<div class="posts-wrapper" >
				<div class="post" style="border: none;">
					<!-- <img src="assets/images/reading1.jpg" alt=""> -->
					<h2>This is the first post</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis iure, ducimus dolor fuga maiores explicabo eligendi quibusdam sequi, quas architecto</p>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum similique aliquam nihil id sit neque mollitia distinctio fugit esse, excepturi cumque harum culpa maiores, numquam perferendis doloribus asperiores sapiente sint. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae magni reprehenderit praesentium quidem voluptatem harum totam quod aliquid minus beatae laborum nemo, repellat rerum aut ut iusto et iure ratione.</p>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum similique aliquam nihil id sit neque mollitia distinctio fugit esse, excepturi cumque harum culpa maiores, numquam perferendis doloribus asperiores sapiente sint.</p>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum similique aliquam nihil id sit neque mollitia distinctio fugit esse, excepturi cumque harum culpa maiores, numquam perferendis doloribus asperiores sapiente sint.</p>
					<div class="post-info">
						<div class="author">
							By <strong>Awa Melvine</strong> on Feb 18, 2017
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
