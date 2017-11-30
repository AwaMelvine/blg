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
	<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
	<div class="container">
		<div class="navbar">
			<h2>Landing page</h2>
		</div>

		<div class="banner">
			<div class="banner-left">
				<h1>Complete Blog in PHP</h1>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente iusto dolores distinctio mollitia, cum quaerat nulla.</p>
				<button>Get Started</button>
			</div>
			<div class="banner-right">
				<form action="" >
					<input type="text" name="username" placeholder="Username">
					<input type="password" name="password"  placeholder="Password"> 
					<button type="submit">Sign in</button>
				</form>
			</div>
		</div>
 

	</div>
</body>
</html>
