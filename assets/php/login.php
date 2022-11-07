<?php include('functions.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../../assets/css/user.css">
	<title>Beroeps Login</title>
</head>
<body>
	<div class="container">
        <div id="logbox">
            <form id="signup" method="post" action="login.php">
                <h1>Log in</h1>
				<input class="input pass" name="username" type="text" placeholder="Username" autofocus="autofocus" required="required" />
				<input class="input pass" name="password" type="password" placeholder="Password" required="required" />
				<input class="inputButton" type="submit" value="Login" name="login_btn" />
				<p>Nog niet geregistreerd <a href="register.php">Sign up</a></p>
            </form>
        </div>
    </div>
</body>
</html>