<?php
include("./assets/php/functions.php")
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>overzicht</title>
    <link rel="stylesheet" href="assets/css/navBar.css">
    <link rel="stylesheet" href="assets/css/overzicht.css">
</head>
<body>

    <header>
      <a href="#" class="logo"><img src="/assets/img/lp_logo.png" alt=""></a>

    
        <nav class="navbar">
          <ul>
            <li><a href="#">Overzicht</a></li>
            <li><a href="assets/php/register.php">Sign up</a></li>
          </ul>
        </nav>
    
      </header>

      <section class="cards">
        <?php
        foreach($data->film as $film) {
            echo "<a href='".$film->ft_link."' class='card'>
                     <img src='".$film->cover."' class='card__image' />
                     <div class='card__overlay'>
                       <div class='card__header'>
                         <svg class='card__arc' xmlns='http://www.w3.org/2000/svg'><path/></svg>                     
                          <div class='card__header-text'>
                             <h2 class='card__title'>".$film->titel."</h3>            
                             <h3 class='card__status'>".$film->regisseur."</h3>
                             <h3 class='card__status'>".$film->jaar."</h3>
                             <h3 class='card__status'>IMDB rating: ".$film->imdb_rating."</h3>
                         </div>
                       </div>
                       <p class='card__description'>".$film->synopsis."</p>
                     </div>
                   </a>";
         }
        ?>

    </section>
</body>
</html>