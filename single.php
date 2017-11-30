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
	<title>Simple Blogging application - Home</title>
	<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
	<div class="container">
		<h2>Landing page</h2>
	</div>
</body>
</html>
