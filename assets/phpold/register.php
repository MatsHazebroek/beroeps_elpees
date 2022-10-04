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
    require('config.php');
    if (isset($_REQUEST['username'])) {
        // Haalt backslashes weg
        $username = stripslashes($_REQUEST['username']);
        // Haalt speciale characters uit de string
        $username = mysqli_real_escape_string($mysqli, $username);
        $email    = stripslashes($_REQUEST['email']);
        $email    = mysqli_real_escape_string($mysqli, $email);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($mysqli, $password);
        $create_datetime = date("Y-m-d H:i:s");
        // Hier voert hij de query uit en voegt de ingevoerde informatie in de table van de database
        $query    = "INSERT into `users` (username, password, email, create_datetime) VALUES 
            ('$username', '" . md5($password) . "', '$email', '$create_datetime')";

        $result   = mysqli_query($mysqli, $query);

        if ($result) {
            echo "<div class='form'>
                  <h3>You are registered successfully.</h3><br/>
                  <p class='link'>Klik hier om in te <a href='login.php'>loggen</a></p>
                  </div>";
        } else {
            echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  <p class='link'>Klik hier om te <a href='register.php'>Registreren</a> again.</p>
                  </div>";
        }
    } else {

?>

    <form class="form" action="" method="post">
        <h1 class="login-title">Registreer</h1>
        <input type="text" class="login-input" name="username" pattern="[a-zA-Z][a-zA-Z0-9-_\.]{1,20}$" placeholder="Gebruikersnaam" required />
        <input type="text" class="login-input" name="email" pattern="[A-Za-z0-9._+-]+@[A-Za-z0-9 -]+\.[a-z]{2,}" placeholder="E-mail" required>
        <input type="password" class="login-input" name="password" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" placeholder="Wachtwoord" required>
        <input type="submit" name="submit" value="Register" class="login-button">
        <p class="link">Heb je al een account? <a href="login.php">Login hier</a></p>
    </form>
<?php
    }
?>
    
</body>
</html>