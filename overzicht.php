<?php 
    include('./assets/php/functions.php');

    // Hier moet het per user gaan kijken
    $query = "SELECT * FROM `VerzamelDB`";

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
            <a href="#" class="logo"><img src="/assets/img/lp_logo.png" alt=""></a>
            
                <nav class="navbar">
                <ul>
                    <li><a href="./index.php">Home</a></li>
                    <li><a href="#">Overzicht</a></li>
                    <li><a href="./assets/php/register.php">Sign up</a></li>
                </ul>
                </nav>
            
            </header>


            <section class="cards">
            <?php 
            while($item = mysqli_fetch_assoc($result)) {
                ?>
                <a href="detail.php?id=<?php echo $item['Id']?>" class="card">
                    <img src="https://87957.stu.sd-lab.nl/stock.jpeg" class="card__image" alt="" />
                    <div class="card__overlay">
                    <div class="card__header">
                        <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>                     
                        <div class="card__header-text">
                            <h3 class="card__title"><?php echo $item['NaamItem'] ?></h3>            
                        <span class="card__status">1 hour ago</span>
                        </div>
                    </div>
                    <p class="card__description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, blanditiis?</p>
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
        echo "Er zijn geen items";
    }

?>