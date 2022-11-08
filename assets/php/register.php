<?php
include('./functions.php');

// if (!isLoggedIn()) {
// 	$_SESSION['msg'] = "You must log in first";
// 	header('location:login.php');
// }

if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['user']);
	header("location:login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../../assets/css/user.css">
	<title>Beroeps Register</title>
</head>

<body>
	<div class="container">
        <div id="logbox">
            <form id="signup" method="post" action="register.php">
                <h1>Maak een account</h1>
				<input class="input pass" name="username" type="text" placeholder="Username" autofocus="autofocus" required/>
				<input class="input pass" name="email" type="email" placeholder="Email adres" required />
				<input class="input pass" name="password_1" type="password" placeholder="Fill an password" required />
				<input class="inputButton" type="submit" value="Sign me up!" name="register_btn" />
				<p>Al geregistreerd <a href="login.php">Sign in</a></p>
            </form>
        </div>
    </div>
</body>

</html>