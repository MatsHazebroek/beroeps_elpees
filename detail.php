<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

$db = mysqli_connect('localhost', 'DBgebruiker', 'DBgebruiker', 'BeroepsDB');

$sql = "SELECT * FROM `VerzamelDB`";
$result = mysqli_query($db, $sql) or die("Error in Selecting " . mysqli_error($db));
$row2 = mysqli_fetch_assoc($result);


$emparray = array();
while($row =mysqli_fetch_assoc($result))
{
    echo $row[`NaamItem`];
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/detail.css">
    <!-- <link rel="stylesheet" href="assets/css/navBar.css"> -->
    <script src="assets/js/detail.js" defer></script>
    <title>Document</title>
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
    <section class="main">
        <div class="main-left">
            <div class="slideshow-container">

                <div class="mySlides fade">
                    <div class="numbertext">1 / 3</div>
                    <img src="https://via.placeholder.com/150" style="width:100%">
                    <div class="text">Caption Text</div>
                </div>

                <div class="mySlides fade">
                    <div class="numbertext">2 / 3</div>
                    <img src="https://via.placeholder.com/150" style="width:100%">
                    <div class="text">Caption Two</div>
                </div>

                <div class="mySlides fade">
                    <div class="numbertext">3 / 3</div>
                    <img src="https://via.placeholder.com/150" style="width:100%">
                    <div class="text">Caption Three</div>
                </div>

                <a class="prev" onclick="plusSlides(-1)">❮</a>
                <a class="next" onclick="plusSlides(1)">❯</a>

            </div>
            <br>

            <div style="text-align:center">
                <span class="dot" onclick="currentSlide(1)"></span>
                <span class="dot" onclick="currentSlide(2)"></span>
                <span class="dot" onclick="currentSlide(3)"></span>
            </div>
            <div class="buttons">
                <button id="edit">Bewerk</button>
                <button id="delete">Verwijder</button>
            </div>
        </div>

        <div class="main-right">
            <div class="main-right-info">
                <h1 id="title">Elpee Titel</h1>
                <span id="info">
                    <p id="Artiest">Artiest:</p>
                    <p id="release">Release Datum:</p>
                    <p id="genre">Genre:</p>
                    <p id="formaat">Formaat:</p>
                </span><br>
                <p>Beschrijving:</p>
                <p id="omschrijving">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quidem enim nisi vitae praesentium,
                    asperiores amet ipsum molestiae quibusdam earum quam, ab eos illum, voluptate iure deleniti nobis
                    dolorum autem voluptates! Quod mollitia quas ad perspiciatis sequi expedita ipsa sapiente cum iusto!
                    Ullam error culpa maiores quam praesentium aperiam repellat id.
                </p>
            </div>
        </div>
    </section>
</body>

</html>
