	<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
	<div class="container">
		
		<ul class="topnav">
		  <li><a class="active" href="#home">Home</a></li>
		  <li><a href="#news">News</a></li>
		  <li><a href="#contact">Contact</a></li>
		  <li class="right"><a href="#about">About</a></li>
		</ul>
		
		<?php if (isset($_SESSION['message'])): ?>
			<div class="message-div">
				<?php 
					echo $_SESSION['message']; 
					
					// unset the session variable 
					unset($_SESSION['message']);
				?>
				<span>X</span>
			</div>
		<?php endif ?>


