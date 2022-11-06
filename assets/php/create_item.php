
<?php 
ini_set('display_errors', 1);
error_reporting(E_ALL);

include('functions.php');

if(!isLoggedIn()) {
    header('location:login.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/create_item.css">
    <link rel="stylesheet" href="../css/navBar.css">
</head>
<body>
                    <header>
                    <a href="#" class="logo"><img src="/assets/img/lp_logo.png" alt=""></a>
                    
                        <nav class="navbar">
                        <ul>
                            <li><a href="./index.php">Home</a></li>
                            <li><a href="../../overzicht.php">Overzicht</a></li>
                            <li><a href="./assets/php/home.php">Admin</a></li>
                            <li><a href="./assets/php/logout.php">Log uit</a></li>
                        </ul>
                        </nav>
                    
                    </header>

    <form class="center" method="POST" action="create_item.php" enctype="multipart/form-data">
        <label>Titel</label><br>
        <input type="text" name="titel" required><br><br>
        <label>Artiest</label><br>
        <input type="text" name="artiest" required><br><br>
        <label>Genre</label><br>
        <input type="text" name="genre" required><br><br>
        <label>Release datum</label><br>
        <input type="date" name="release" required><br><br>
        <label>Formaat</label><br>
        <select name="formaat">
            <option>18 cm(7 inch)</option>
            <option> 25 cm(10 inch)</option>
            <option> 30 cm(12 inch)</option>
        </select><br><br>
        <label>Cover foto</label><br>
        <input id="file" type="file" name="image" required><br><br>
        <label>Beschrijving</label><br>
        <textarea name="omschrijving" cols="30" rows="10"></textarea><br>
        <button type="submit" name="create_item">create</button>
    </form>

</body>
</html>