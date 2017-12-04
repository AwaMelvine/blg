<?php include('includes/config.php') ?>
<?php include('functions/public/registration.php') ?>
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

		<form class="register_form" method="post" action="login.php" >
			<h2>Login</h2>
			<?php if (count($errors) > 0): ?>
				<div style="color: red; background-color: #f2dede; color: #a94442; padding: 5px 10px; border: 1px solid #a94442; border-radius: 5px; margin-bottom: 15px;">
					<ul>
						<?php foreach ($errors as $error): ?>
							<li><?php echo $error; ?></li>
						<?php endforeach ?>
					</ul>
				</div>
			<?php endif ?>
			<input type="text" name="username" placeholder="Username">
			<input type="password" name="password"  placeholder="Password"> 
			<button type="submit" name="login_btn" class="btn">Sign in</button>
			<br><br>
			<p>
				Not yet a member? <a href="register.php">Sign up</a>
			</p>
		</form>


	<?php include('includes/footer.php') ?>		


	