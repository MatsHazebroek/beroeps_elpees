<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

include('./assets/php/functions.php');

if(!isLoggedIn() && !isAdmin()) {
    header('location:./index.html');
    exit;
}

$id = $_GET['id'];

$query = "SELECT * FROM `VerzamelDB` WHERE Id = " . $id;
$result = mysqli_query($db, $query);


if (mysqli_num_rows($result)) {
    $item = mysqli_fetch_assoc($result);
    ?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/navBar.css">
        <title>Detail Pagina</title>
    </head>

    <body>
        <header>
            <a href="#" class="logo"><img src="./assets/img/lp_logo.png" alt=""></a>

            <nav class="navbar">
                <ul>
                    <li><a href="./overzicht.php">Overzicht</a></li>
                    <li><a href="assets/php/register.php">Sign up</a></li>
                </ul>
            </nav>
        </header>
        <section class="parent">
            <div class="div1">
                <div class="container"></div>
                    <h1 id="title"><?php echo $item['NaamItem'] ?></h1>
                    <span id="info">
                        <p id="Artiest">Artiest: <?php echo $item['Artiest'] ?></p>
                        <p id="release">Release Datum: <?php echo $item['ReleaseDatum'] ?></p>
                        <p id="genre">Genre: <?php echo $item['Genre'] ?></p>
                        <p id="formaat">Formaat: <?php echo $item['Formaat'] ?></p>
                    </span><br>
                    <p>Beschrijving:</p>
                    <p id="omschrijving">
                        <?php echo $item['Omschrijving'] ?>
                    </p>

                    <br>     
                    <br>     
                    
                    <div class="buttons">
                        <button id="edit"><a href="./assets/php/detail/edit_item.php?id=<?php echo $item['Id']?>">Bewerk</a></button>
                        <button id="delete"><a href="./assets/php/verwijder.php?id=<?php echo $item['Id']?>">Verwijder</a></button>
                    </div>
            </div>
</div>

            <div class="div2">
                <img src="./assets/php/upload/<?php echo $item['ItemImage']?>"> 
            </div>
        </section>
    </body>

    </html>

    <?php
    }
?>