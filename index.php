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
                    <title>Werkt niet</title>
                </head>
                <body>
                    <header>
                        <a href="#" class="logo"><img src="/assets/img/lp_logo.png" alt=""></a>

                        <nav class="navbar">
                        <ul>
                            <li><a href="assets/php/register.php">Sign up</a></li>
                        </ul>
                        </nav>

                    </header>
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

                    <title>Werkt wel admin</title>
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

                    <title>Werkt wel</title>
                </head>
                <body>
                     <header>
                        <a href="#" class="logo"><img src="/assets/img/lp_logo.png" alt=""></a>

                        <nav class="navbar">
                        <ul>
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

