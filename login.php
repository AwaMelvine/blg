<?php include('includes/config.php') ?>
<?php 

	$posts_query = "SELECT * FROM posts WHERE slug='first-post' AND published=1";

	$result = mysqli_query($db, $posts_query);

	// fetch all posts from database
	// return them as an associative array called $posts
	$posts = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>BlogApp - Login Page</title>
	<?php include('includes/header.php') ?>		

		<form class="register_form" action="" >
			<h2>Login</h2>
			<input type="text" name="username" placeholder="Username">
			<input type="password" name="password"  placeholder="Password"> 
			<button type="submit">Sign in</button>
			<br><br>
			<p>
				Not yet a member? <a href="register.php">Sign up</a>
			</p>
		</form>



	<?php include('includes/footer.php') ?>		


	