<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    // Maakt hier verbinding met de database
    require('config.php');
    session_start();

    if (isset($_POST['username'])) {
        // Haalt backslashes weg
        $username = stripslashes($_REQUEST['username']);
        $username = mysqli_real_escape_string($mysqli, $username);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($mysqli, $password);

        // Kijken of de gegevens overeenkomen met de inhoud van de tables
        $query    = "SELECT * FROM `users` WHERE username='$username'
                     AND password='" . md5($password) . "'";
                     
        $result = mysqli_query($mysqli, $query) or die(mysql_error());
        $rows = mysqli_num_rows($result);
        if ($rows == 1) {
            $_SESSION['username'] = $username;
            // Stuurt persoon weer door naar het dashboard
            header("Location: dashboard.php");
        } else {
            echo "<div class='form'>
                  <h3>Incorrect Username/password.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a> again.</p>
                  </div>";
        }
    } else {
?>
    <form class="form" method="post" name="login">
        <h1 class="login-title">Login</h1>
        <input type="text" class="login-input" name="username" placeholder="Gebruikersnaam" autofocus="true"/>
        <input type="password" class="login-input" name="password" placeholder="Wachtwoord"/>
        <input type="submit" value="Login" name="submit" class="login-button"/>
        <p class="link">Heb je nog geen account? <a href="register.php">Registreer Nu</a></p>
  </form>
<?php
    }
?>
</body>
</html>