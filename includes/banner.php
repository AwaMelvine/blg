<?php if (empty($_SESSION['user']['username'])): ?>
	<div class="banner clearfix">
		<div class="banner-left">
			<h1>Complete Blog in PHP</h1>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente iusto dolores distinctio mollitia, cum quaerat nulla.</p>
			<a href="register.php" class="btn">Get Started</a>
		</div>
		<div class="banner-right">
			<form action="" >
				<h3>Login</h3>
				<input type="text" name="username" placeholder="Username">
				<input type="password" name="password"  placeholder="Password"> 
				<button class="btn" type="submit">Sign in</button>
			</form>
		</div>
	</div>
<?php endif ?>
