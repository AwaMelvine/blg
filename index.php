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

	<div class="container">
		<!-- <div class="banner">
			<div class="banner-left">
				<h1>Complete Blog in PHP</h1>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente iusto dolores distinctio mollitia, cum quaerat nulla.</p>
				<button>Get Started</button>
			</div>
			<div class="banner-right">
				<form action="" >
					<h3>Login</h3>
					<input type="text" name="username" placeholder="Username">
					<input type="password" name="password"  placeholder="Password"> 
					<button type="submit">Sign in</button>
				</form>
			</div>
		</div>
 -->
		<div class="posts-content">

			<div class="posts-wrapper">
				<div class="post">
					<img src="assets/images/reading1.jpg" alt="">
					<h2>This is the first post</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis iure, ducimus dolor fuga maiores explicabo eligendi quibusdam sequi, quas architecto</p>
					<div class="post-info">
						<div class="author">
							By <strong>Awa Melvine</strong> on Feb 18, 2017
						</div>
						<div class="readmore">
						<button>Read more</button>
						</div>
					</div>

				</div>
				<div class="post">
					<img src="assets/images/reading1.jpg" alt="">
					<h2>This is the first post</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis iure, ducimus dolor fuga maiores explicabo eligendi quibusdam sequi, quas architecto</p>
					<div class="post-info">
						<div class="author">
							By <strong>Awa Melvine</strong> on Feb 18, 2017
						</div>
						<div class="readmore">
						<button>Read more</button>
						</div>
					</div>

				</div>
				<div class="post">
					<img src="assets/images/reading1.jpg" alt="">
					<h2>This is the first post</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis iure, ducimus dolor fuga maiores explicabo eligendi quibusdam sequi, quas architecto</p>
					<div class="post-info">
						<div class="author">
							By <strong>Awa Melvine</strong> on Feb 18, 2017
						</div>
						<div class="readmore">
						<button>Read more</button>
						</div>
					</div>

				</div>
			</div>
			<div class="sidebar" style="margin: 0px auto;">
				<form action="" >
					<input type="text" name="search" > 
					<button>Search</button>
				</form>
			</div>


		</div>
 

	</div>
</body>
</html>
