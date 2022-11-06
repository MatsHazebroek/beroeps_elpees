<?php 

include('./functions.php');

// if (!isAdmin()) {
//     header('location:./login.php');
// }


?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- <link rel="stylesheet" href="style.css"> -->
	<link rel="stylesheet" href="../../assets/css/user.css">
	<title>Maak user</title>
</head>

<body>

    <div class="container">
        <div id="logbox">
            <form method="post" action="create_user.php">

                <?php echo display_error(); ?>

                <h1>Create user</h1>

                <input class="input pass" type="text" name="username" placeholder="Username">

                <input class="input pass" type="email" name="email" placeholder="E-mail">

                <label>User type</label> 
                <select name="user_type" id="user_type">
                    <option value=""></option>
                    <option value="admin">Admin</option>
                    <option value="user">User</option>
                </select>

                <input class="input pass" type="password" name="password_1" placeholder="Password">
                
                <input class="input pass" type="password" name="password_2" placeholder="Repeat Password">
                
                <input type="submit" class="inputButton" name="register_btn">
            </form>
        </div>
    </div>
</body>

</html>