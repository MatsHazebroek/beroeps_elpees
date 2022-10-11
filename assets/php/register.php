<?php
include('functions.php');
// if (!isLoggedIn()) {
// 	$_SESSION['msg'] = "You must log in first";
// 	header('location: login.php');
// }

// if (isset($_GET['logout'])) {
// 	session_destroy();
// 	unset($_SESSION['user']);
// 	header("location: login.php");
// }
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/user.css">
	<title>Document</title>
</head>

<body>
	<!-- <div class="header">
		<h2>Register</h2>
	</div>
	<form method="post" action="register.php">
		<?php echo display_error(); ?>
		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" value="<?php echo $username; ?>">
		</div>
		<div class="input-group">
			<label>Email</label>
			<input type="email" name="email" value="<?php echo $email; ?>">
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password_1">
		</div>
		<div class="input-group">
			<label>Confirm password</label>
			<input type="password" name="password_2">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="register_btn">Register</button>
		</div>
		<p>
			Already a member? <a href="login.php">Sign in</a>
		</p>
	</form> -->
	<div class="container">
        <div id="logbox">
            <form id="signup" method="post" action="register.php">
                <h1>Maak een account</h1>
				<input class="input pass" name="username" type="text" placeholder="Username" pattern="^[\w]{3,16}$" autofocus="autofocus" required="required" />
				<input class="input pass" name="email" type="email" placeholder="Email adres" />
				<input class="input pass" name="password_1" type="password" placeholder="Fill an password" required="required" />
				<input class="input pass" name="password_2" type="password" placeholder="Repeat password" required="required" />
				<input class="inputButton" type="submit" value="Sign me up!" name="register_btn" />
				<p>Al geregistreerd <a href="login.php">Sign in</a></p>
            </form>
        </div>
    </div>
</body>

</html>