<?php 
    include('auth_session.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
    <p>Hey, <?php echo $_SESSION['username']; ?>!</p>
        <p>You are in user dashboard page.</p>
        <p><a href="./assets/php/logout.php">Logout</a></p>
    </div>
</body>
</html>