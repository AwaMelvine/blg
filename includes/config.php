<?php 
	// start session
	session_start();

	define('BASE_URL', 'http://localhost/youtube/blog');
	define('HOST', 'localhost');
	define('USER', 'root');
	define('PASS', '');
	define('DB', 'blog');

	$db = mysqli_connect(HOST, USER, PASS, DB);

	if (mysqli_connect_errno()) {
		echo "Failed to connect to MySQL " . mysqli_connect_errno();
	}

?>