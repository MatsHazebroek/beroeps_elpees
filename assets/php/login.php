<?php include('functions.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- <link rel="stylesheet" href="style.css"> -->
	<link rel="stylesheet" href="login.css">
	<script src="login.js"></script>
	<title>Document</title>
</head>
<body>
	<!-- <form method="post" action="login.php">

		<?php echo display_error(); ?>

		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" >
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="login_btn">Login</button>
		</div>
		<p>
			Not yet a member? <a href="register.php">Sign up</a>
		</p>
	</form> -->

	<script  src="https://code.jquery.com/jquery-3.1.1.min.js"  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="  crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js" ></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<div class="body">
		<div class="veen">
			<div class="login-btn splits">
				<p>Already an user?</p>
				<button class="active">Login</button>
			</div>
			<div class="rgstr-btn splits">
				<p>Don't have an account?</p>
				<button>Register</button>
			</div>
			<div class="wrapper">
				<form id="login" tabindex="500">
					<h3>Login</h3>
					<div class="mail">
						<input type="mail" name="">
						<label>Mail or Username</label>
					</div>
					<div class="passwd">
						<input type="password" name="">
						<label>Password</label>
					</div>
					<div class="submit">
						<button class="dark">Login</button>
					</div>
				</form>
				<form id="register" tabindex="502">
					<h3>Register</h3>
					<div class="name">
						<input type="text" name="">
						<label>Full Name</label>
					</div>
					<div class="mail">
						<input type="mail" name="">
						<label>Mail</label>
					</div>
					<div class="uid">
						<input type="text" name="">
						<label>User Name</label>
					</div>
					<div class="passwd">
						<input type="password" name="">
						<label>Password</label>
					</div>
					<div class="submit">
						<button class="dark">Register</button>
					</div>
				</form>
			</div>
		</div>	
	</div>


	<style type="text/css">
		.site-link{
      padding: 5px 15px;
			position: fixed;
			z-index: 99999;
			background: #fff;
			box-shadow: 0 0 4px rgba(0,0,0,.14), 0 4px 8px rgba(0,0,0,.28);
			right: 30px;
			bottom: 30px;
			border-radius: 10px;
		}
		.site-link img{
			width: 30px;
			height: 30px;
		}
	</style>
</body>
</html>