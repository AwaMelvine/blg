<?php 
	session_start();
	session_destroy();
	unset($_SESSION['user']);
	header("location: index.php");
	exit(0);
?>