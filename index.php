<?php 
    include('./assets/php/functions.php');

    ini_set('display_errors', 1);
    error_reporting(E_ALL); 

    if(!isLoggedIn()) {
        ?>
                <!-- HTMl Code -->
                <!DOCTYPE html>
                <html lang="en">
                <head>
                    <meta charset="UTF-8">
                    <meta http-equiv="X-UA-Compatible" content="IE=edge">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <link rel="stylesheet" href="assets/css/navBar.css">
                    <link rel="stylesheet" href="./assets/css/style.css">
                    <title>Beroeps | Verzamelaar</title>
                </head>
                <body>
                    <header>
                        <a href="#" class="logo"><img src="./assets/img/lp_logo.png" alt=""></a>

                        <nav class="navbar">
                        <ul>
                            <li><a href="assets/php/register.php">Sign up</a></li>
                        </ul>
                        </nav>
                    </header>
                    <div class="parent">
                        <div class="div1"> 
                            <h1>Hallo verzamelaar!</h1>
                            <p>Wij hebben deze collectiesite speciaal gemaakt voor LP-verzamelaars.<br>
                            Als het jouw handig lijkt om jouw collectie te visualiseren/documenteren dan kunt u terecht op onze site.<br>
                            Wij hebben het makkelijk gemaakt om alle platen die zich in u collectie bevinden makkelijk toe te voegen aan je digitalen collectie.
                        </p>
                        </div>
                        <div class="div2"> 
                            
                        </div>
                    </div>
                </body>
                </html>
        <?php 
        
    } else if (isLoggedIn()) {
        if (isAdmin()) {
            ?>

                <!-- HTML Code -->
                <!DOCTYPE html>
                <html lang="en">
                <head>
                    <meta charset="UTF-8">
                    <meta http-equiv="X-UA-Compatible" content="IE=edge">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <link rel="stylesheet" href="assets/css/navBar.css">
                    <title>Beroeps | Verzamelaar - Admin</title>
                </head>
                <body>
                     <header>
                        <a href="#" class="logo"><img src="/assets/img/lp_logo.png" alt=""></a>

                        <nav class="navbar">
                        <ul>
                            <li><a href="./index.php">Home</a></li>
                            <li><a href="./overzicht.php">Overzicht</a></li>
                            <li><a href="./assets/php/home.php">Admin</a></li>
                            <li><a href="assets/php/logout.php">Log uit</a></li>
                        </ul>
                        </nav>

                    </header>
                </body>
                </html>


            <?php 
        } else {
            ?>
                <!-- HTML Code -->
                <!DOCTYPE html>
                <html lang="en">
                <head>
                    <meta charset="UTF-8">
                    <meta http-equiv="X-UA-Compatible" content="IE=edge">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <link rel="stylesheet" href="assets/css/navBar.css">

                    <title>Beroeps | Verzamelaar</title>
                </head>
                <body>
                     <header>
                        <a href="#" class="logo"><img src="/assets/img/lp_logo.png" alt=""></a>

                        <nav class="navbar">
                        <ul>
                            <li><a href="./index.php">Home</a></li>
                            <li><a href="./overzicht.php">Overzicht</a></li>
                            <li><a href="assets/php/logout.php">Log uit</a></li>
                        </ul>
                        </nav>

                    </header>
                    
                </body>
                </html>

        <?php
            
        }
        ?>
        
        <?php
        
    } 
    
?>

