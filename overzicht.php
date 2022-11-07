<?php 
    include('./assets/php/functions.php');

    if (!isAdmin()) {

            // Hier moet het per user gaan kijken
            $query = "SELECT * FROM `VerzamelDB` WHERE `user` = " . $_SESSION['user']['id'];

            $result = mysqli_query($db, $query);
            
            if (mysqli_num_rows($result) > 0) {

                ?>
                <!DOCTYPE html>
                <html lang="en">
                <head>
                    <meta charset="UTF-8">
                    <meta http-equiv="X-UA-Compatible" content="IE=edge">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <title>overzicht</title>
                    <link rel="stylesheet" href="./assets/css/navBar.css">
                    <link rel="stylesheet" href="./assets/css/overzicht.css">
                </head>
                <body>

                    <header>
                    <a href="#" class="logo"><img src="./assets/img/lp_logo.png" alt=""></a>
                    
                        <nav class="navbar">
                        <ul>
                            <li><a href="./index.php">Home</a></li>
                            <li><a href="#">Overzicht</a></li>
                            <li><a href="./assets/php/logout.php">Log uit</a></li>
                        </ul>
                        </nav>
                    
                    </header>


                    <section class="cards">
                        <a href="./assets/php/create_item.php" class="addCard">
                            <h1>Voeg toe</h1>
                        </a>
                    
                    <?php 
                    while($item = mysqli_fetch_assoc($result)) {
                        ?>
                        <a href="detail.php?id=<?php echo $item['Id']?>" class="card">
                            <img src="assets/php/upload/<?php echo $item['ItemImage']?>" class="card__image" alt="" />
                            <div class="card__overlay">
                                <div class="card__header">
                                    <svg class="card__arc" xmlns="http://www.w3.org/2000/svg%22%3E"><path/></svg>
                                    <div class="card__header-text">
                                        <h1 class="card__title"><?php echo $item['NaamItem']?></h1>
                                        <span class="card__status"><?php echo $item['Artiest']?><br></span>
                                    </div>
                                </div>
                                <span class="card__description"><span>Releasedatum:</span> <?php echo $item['ReleaseDatum']?><br></span>
                                <span class="card__description"><span>Genre:</span> <?php echo $item['Genre']?><br></span>
                                <span class="card__description"><span>Formaat:</span> <?php echo $item['Formaat']?></span>
                                <p class="card__description"><span>Omschrijving:</span><br><?php echo $item['Omschrijving']?></p>
                            </div>
                        </a>
                    <?php 
                    }
                    ?>
                    </section>
                </body>
                </html>

            <?php 
            } else {
                ?>
                <!DOCTYPE html>
                    <html lang="en">
                    <head>
                        <meta charset="UTF-8">
                        <meta http-equiv="X-UA-Compatible" content="IE=edge">
                        <meta name="viewport" content="width=device-width, initial-scale=1.0">
                        <title>overzicht admin</title>
                        <link rel="stylesheet" href="./assets/css/navBar.css">
                        <link rel="stylesheet" href="./assets/css/overzicht.css">
                    </head>
                    <body>
    
                        <header>
                        <a href="#" class="logo"><img src="./assets/img/lp_logo.png" alt=""></a>
                        
                            <nav class="navbar">
                            <ul>
                                <li><a href="./index.php">Home</a></li>
                                <li><a href="#">Overzicht</a></li>
                                <li><a href="./assets/php/home.php">Admin</a></li>
                                <li><a href="./assets/php/logout.php">Log uit</a></li>
                            </ul>
                            </nav>
                        
                        </header>
                        <a href="./assets/php/create_item.php" class="addCard">
                            <h1>Voeg toe</h1>
                        </a>
                </body>
                <?php
                }


    } else {
            // Hier moet het per user gaan kijken
            $query  = "SELECT * FROM `VerzamelDB`";

            $result = mysqli_query($db, $query);
            
            if (mysqli_num_rows($result) > 0) {

                ?>
                <!DOCTYPE html>
                <html lang="en">
                <head>
                    <meta charset="UTF-8">
                    <meta http-equiv="X-UA-Compatible" content="IE=edge">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <title>overzicht admin</title>
                    <link rel="stylesheet" href="./assets/css/navBar.css">
                    <link rel="stylesheet" href="./assets/css/overzicht.css">
                </head>
                <body>

                    <header>
                    <a href="#" class="logo"><img src="./assets/img/lp_logo.png" alt=""></a>
                    
                        <nav class="navbar">
                        <ul>
                            <li><a href="./index.php">Home</a></li>
                            <li><a href="#">Overzicht</a></li>
                            <li><a href="./assets/php/home.php">Admin</a></li>
                            <li><a href="./assets/php/logout.php">Log uit</a></li>
                        </ul>
                        </nav>
                    
                    </header>


                    <section class="cards">
                    <?php 
                    while($item = mysqli_fetch_assoc($result)) {
                        ?>
                        <a href="detail.php?id=<?php echo $item['Id']?>" class="card">
                            <img src="https://87957.stu.sd-lab.nl/stock.jpeg" class="card__image" alt=""/>
                            <div class="card__overlay">
                                <div class="card__header">
                                    <svg class="card__arc" xmlns="http://www.w3.org/2000/svg%22%3E"><path/></svg>
                                    <div class="card__header-text">
                                        <h1 class="card__title"><?php echo $item['NaamItem']?></h1>
                                        <span class="card__status"><?php echo $item['Artiest']?><br></span>
                                        <!-- <span class="card__status"><?php echo $item['ReleaseDatum']?><br></span>
                                        <span class="card__status"><?php echo $item['Genre']?><br></span>
                                        <span class="card__status"><?php echo $item['Formaat']?></span>
                                        <span class="card__status"><?php echo $item['Artiest']?></span> -->
                                    </div>
                                </div>
                                <p class="card__description">Omschrijving:<br><?php echo $item['Omschrijving']?></p>
                            </div>
                        </a>
                    <?php 
                    }
                    ?>
                    </section>
                </body>
                </html>

            <?php 
            } else {
            ?>
            <!DOCTYPE html>
                <html lang="en">
                <head>
                    <meta charset="UTF-8">
                    <meta http-equiv="X-UA-Compatible" content="IE=edge">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <title>overzicht admin</title>
                    <link rel="stylesheet" href="./assets/css/navBar.css">
                    <link rel="stylesheet" href="./assets/css/overzicht.css">
                </head>
                <body>

                    <header>
                    <a href="#" class="logo"><img src="./assets/img/lp_logo.png" alt=""></a>
                    
                        <nav class="navbar">
                        <ul>
                            <li><a href="./index.php">Home</a></li>
                            <li><a href="#">Overzicht</a></li>
                            <li><a href="./assets/php/home.php">Admin</a></li>
                            <li><a href="./assets/php/logout.php">Log uit</a></li>
                        </ul>
                        </nav>
                    
                    </header>
            </body>
            <?php
            }
    }

?>