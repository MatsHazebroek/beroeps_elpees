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
                    <link rel="stylesheet" href="assets/css/overzicht.css">
                    <title>Werkt niet</title>
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
            <a href="" class="card">
            <img src="https://87957.stu.sd-lab.nl/stock.jpeg" class="card__image" alt="" />
            <div class="card__overlay">
              <div class="card__header">
                <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>                     
                 <div class="card__header-text">
                    <h3 class="card__title">Jessica Parker</h3>            
                  <span class="card__status">1 hour ago</span>
                </div>
              </div>
              <p class="card__description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, blanditiis?</p>
            </div>
          </a>
          <a href="" class="card">
            <img src="https://87957.stu.sd-lab.nl/stock.jpeg" class="card__image" alt="" />
            <div class="card__overlay">
              <div class="card__header">
                <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>                     
                 <div class="card__header-text">
                    <h3 class="card__title">Jessica Parker</h3>            
                  <span class="card__status">1 hour ago</span>
                </div>
              </div>
              <p class="card__description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, blanditiis?</p>
            </div>
          </a>
          <a href="" class="card">
            <img src="https://87957.stu.sd-lab.nl/stock.jpeg" class="card__image" alt="" />
            <div class="card__overlay">
              <div class="card__header">
                <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>                     
                 <div class="card__header-text">
                    <h3 class="card__title">Jessica Parker</h3>            
                  <span class="card__status">1 hour ago</span>
                </div>
              </div>
              <p class="card__description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, blanditiis?</p>
            </div>
          </a>
          <a href="" class="card">
            <img src="https://87957.stu.sd-lab.nl/stock.jpeg" class="card__image" alt="" />
            <div class="card__overlay">
              <div class="card__header">
                <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>                     
                 <div class="card__header-text">
                    <h3 class="card__title">Jessica Parker</h3>            
                  <span class="card__status">1 hour ago</span>
                </div>
              </div>
              <p class="card__description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, blanditiis?</p>
            </div>
          </a>
          <a href="" class="card">
            <img src="https://87957.stu.sd-lab.nl/stock.jpeg" class="card__image" alt="" />
            <div class="card__overlay">
              <div class="card__header">
                <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>                     
                 <div class="card__header-text">
                    <h3 class="card__title">Jessica Parker</h3>            
                  <span class="card__status">1 hour ago</span>
                </div>
              </div>
              <p class="card__description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, blanditiis?</p>
            </div>
          </a>
          <a href="" class="card">
            <img src="https://87957.stu.sd-lab.nl/stock.jpeg" class="card__image" alt="" />
            <div class="card__overlay">
              <div class="card__header">
                <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>                     
                 <div class="card__header-text">
                    <h3 class="card__title">Jessica Parker</h3>            
                  <span class="card__status">1 hour ago</span>
                </div>
              </div>
              <p class="card__description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, blanditiis?</p>
            </div>
          </a>
          <a href="" class="card">
            <img src="https://87957.stu.sd-lab.nl/stock.jpeg" class="card__image" alt="" />
            <div class="card__overlay">
              <div class="card__header">
                <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>                     
                 <div class="card__header-text">
                    <h3 class="card__title">Jessica Parker</h3>            
                  <span class="card__status">1 hour ago</span>
                </div>
              </div>
              <p class="card__description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, blanditiis?</p>
            </div>
          </a>
          <a href="" class="card">
            <img src="https://87957.stu.sd-lab.nl/stock.jpeg" class="card__image" alt="" />
            <div class="card__overlay">
              <div class="card__header">
                <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>                     
                 <div class="card__header-text">
                    <h3 class="card__title">Jessica Parker</h3>            
                  <span class="card__status">1 hour ago</span>
                </div>
              </div>
              <p class="card__description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, blanditiis?</p>
            </div>
          </a>
    </section>
                </body>
                </html>
        <?php 
        
    } else if (isLoggedIn()) {
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
                            <li><a href="#">Overzicht</a></li>
                            <!-- <li><a href="assets/php/register.php">Sign up</a></li> -->
                        </ul>
                        </nav>

                    </header>
                    <section class="cards">
            <a href="" class="card">
            <img src="https://87957.stu.sd-lab.nl/stock.jpeg" class="card__image" alt="" />
            <div class="card__overlay">
              <div class="card__header">
                <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>                     
                 <div class="card__header-text">
                    <h3 class="card__title">Jessica Parker</h3>            
                  <span class="card__status">1 hour ago</span>
                </div>
              </div>
              <p class="card__description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, blanditiis?</p>
            </div>
          </a>
          <a href="" class="card">
            <img src="https://87957.stu.sd-lab.nl/stock.jpeg" class="card__image" alt="" />
            <div class="card__overlay">
              <div class="card__header">
                <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>                     
                 <div class="card__header-text">
                    <h3 class="card__title">Jessica Parker</h3>            
                  <span class="card__status">1 hour ago</span>
                </div>
              </div>
              <p class="card__description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, blanditiis?</p>
            </div>
          </a>
          <a href="" class="card">
            <img src="https://87957.stu.sd-lab.nl/stock.jpeg" class="card__image" alt="" />
            <div class="card__overlay">
              <div class="card__header">
                <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>                     
                 <div class="card__header-text">
                    <h3 class="card__title">Jessica Parker</h3>            
                  <span class="card__status">1 hour ago</span>
                </div>
              </div>
              <p class="card__description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, blanditiis?</p>
            </div>
          </a>
          <a href="" class="card">
            <img src="https://87957.stu.sd-lab.nl/stock.jpeg" class="card__image" alt="" />
            <div class="card__overlay">
              <div class="card__header">
                <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>                     
                 <div class="card__header-text">
                    <h3 class="card__title">Jessica Parker</h3>            
                  <span class="card__status">1 hour ago</span>
                </div>
              </div>
              <p class="card__description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, blanditiis?</p>
            </div>
          </a>
          <a href="" class="card">
            <img src="https://87957.stu.sd-lab.nl/stock.jpeg" class="card__image" alt="" />
            <div class="card__overlay">
              <div class="card__header">
                <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>                     
                 <div class="card__header-text">
                    <h3 class="card__title">Jessica Parker</h3>            
                  <span class="card__status">1 hour ago</span>
                </div>
              </div>
              <p class="card__description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, blanditiis?</p>
            </div>
          </a>
          <a href="" class="card">
            <img src="https://87957.stu.sd-lab.nl/stock.jpeg" class="card__image" alt="" />
            <div class="card__overlay">
              <div class="card__header">
                <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>                     
                 <div class="card__header-text">
                    <h3 class="card__title">Jessica Parker</h3>            
                  <span class="card__status">1 hour ago</span>
                </div>
              </div>
              <p class="card__description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, blanditiis?</p>
            </div>
          </a>
          <a href="" class="card">
            <img src="https://87957.stu.sd-lab.nl/stock.jpeg" class="card__image" alt="" />
            <div class="card__overlay">
              <div class="card__header">
                <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>                     
                 <div class="card__header-text">
                    <h3 class="card__title">Jessica Parker</h3>            
                  <span class="card__status">1 hour ago</span>
                </div>
              </div>
              <p class="card__description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, blanditiis?</p>
            </div>
          </a>
          <a href="" class="card">
            <img src="https://87957.stu.sd-lab.nl/stock.jpeg" class="card__image" alt="" />
            <div class="card__overlay">
              <div class="card__header">
                <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>                     
                 <div class="card__header-text">
                    <h3 class="card__title">Jessica Parker</h3>            
                  <span class="card__status">1 hour ago</span>
                </div>
              </div>
              <p class="card__description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, blanditiis?</p>
            </div>
          </a>
    </section>
                </body>
                </html>

        <?php
    }
?>

