<?php 

	// initialize form variables
	$username = "Awa";
	$email = "melvineawa@gmail.com";

	// initialize $errors array to hold form errors
	$errors = [];

	// IF REGISTER BUTTON IS PRESSED
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

				// Get the id of the last inserted user
				// and put the user in a session array variable $_SESSION['user']
				$user_id = mysqli_insert_id($db);
				$_SESSION['user'] = userById($user_id);

				// redirect to the index page
				header('location: index.php');
				exit(0);
			}
		}
	}
	// END USER REGISTRATION


	// WHEN THE LOGIN BUTTON IS PRESSED
	if (isset($_POST['login_btn'])) {
		$username = escape($_POST['username']);
		$password = escape($_POST['password']);

		if (empty($username)) {
			$error = "You must provide a username";
			$errors['username'] = $error;
		}

		if (empty($password)) {
			$error = "Password is required";
			$errors['password'] = $error;
		}
		
		$password = md5($password);
		$query = "SELECT * FROM users WHERE 
					username='$username' 
					AND password='$password'
					LIMIT 1
				";

		$result = mysqli_query($db, $query);

		if (mysqli_num_rows($result) > 0) {
			// set confirm message
			$_SESSION['message'] = "You are now logged in";

			// Get the id of the last inserted user
			// and put the user in a session array variable $_SESSION['user']
			$user_id = mysqli_fetch_assoc($result)['id'];

			$_SESSION['user'] = userById($user_id);

			// redirect to the index page
			header('location: index.php');
			exit(0);
		}




	}
	// END USER LOGIN


	function userById($id)
	{
		global $db;
		$query = "SELECT * FROM users WHERE id=$id LIMIT 1";			
		$results = mysqli_query($db, $query);

		// return user in array ...
		// ... format: ['username' => 'Awa', 'email' => 'test@awa.com', ...]
		$user = mysqli_fetch_assoc($results); 

		return $user;
	}

	function escape($value)
	{
		global $db;
		return mysqli_real_escape_string($db, $value);
	}

?>