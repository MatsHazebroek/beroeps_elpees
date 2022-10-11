<?php include('functions.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="/assets/css/user.css">
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

	<div class="container">
        <div id="logbox">
            <form id="signup" method="post" action="login.php">
                <h1>Log in</h1>
				<input class="input pass" name="username" type="text" placeholder="Username" pattern="^[\w]{3,16}$" autofocus="autofocus" required="required" />
				<input class="input pass" name="password_1" type="password" placeholder="Password" required="required" />
				<input class="inputButton" type="submit" value="Login" name="login_btn" />
				<p>Nog niet geregistreerd <a href="register.php">Sign up</a></p>
            </form>
        </div>
    </div>
</body>
</html>