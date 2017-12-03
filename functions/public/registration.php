<?php 
	// initialize form variables
	$username = "Awa";
	$email = "melvineawa@gmail.com";

	// initialize $errors array to hold form errors
	$errors = [];

	// if the register button is pressed ...
	if (isset($_POST['register_user'])) {
		// grab all values coming from the register form
		$username = escape($_POST['username']);
		$email = escape($_POST['email']);
		$password = escape($_POST['password']);
		$password_2 = escape($_POST['password_2']);

		// push an error to the $errors array if no username is provided
		if (empty($username)) {
			$error = "You must provide a username";
			$errors['username'] = $error;
		}

		// the username must be greater that 3 characters
		if (strlen($username) < 3) {
			$error = "Username must be at least 3 characters";
			$errors['name_length'] = $error;
		}

		// email address required
		if (empty($email)) {
			$error = "Email address required";
			$errors['email'] = $error;
		}

		if (empty($password) || empty($password_2)) {
			$error = "Password is required";
			$errors['password'] = $error;
		}

		// if the two passwords do not match, set a passwords error
		if ($password !== $password_2) {
			$error = "The two passwords do not match";
			$errors['password'] = $error;
		}

		// check if user already exists in database
		$query = "SELECT * FROM users WHERE email='$email' LIMIT 1";			
		$results = mysqli_query($db, $query);

		if (mysqli_num_rows($results) > 0) {
			$error = "A user with that email already exists";
			$errors['email'] = $error;
		}

		// register user to database if there's no errors in the form
		if (count($errors) == 0) {
			// for security purposes, encrypt the password using md5() function
			$password = md5($password);

			// insert query
			$sql = "INSERT INTO users (username, email, password) 
					VALUES('$username', '$email', '$password')";

			// if query executed successfully
			if(mysqli_query($db, $sql)){
				// set confirm message
				$_SESSION['message'] = "You are now logged in";

				// redirect to the index page
				header('location: index.php');
			}
		}



	}

	function escape($value)
	{
		global $db;
		return mysqli_real_escape_string($db, $value);
	}

?>