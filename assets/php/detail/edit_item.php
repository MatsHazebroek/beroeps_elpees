<!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="../../css/create_item.css">
            <link rel="stylesheet" href="../../css/navBar.css">
            <title>Document</title>
        </head>
        <body>

        <header>
                    <a href="#" class="logo"><img src="../../img/lp_logo.png" alt=""></a>
                    
                        <nav class="navbar">
                        <ul>
                            <li><a href="./index.php">Home</a></li>
                            <li><a href="../../../overzicht.php">Overzicht</a></li>
                            <li><a href="./assets/php/home.php">Admin</a></li>
                            <li><a href="./assets/php/logout.php">Log uit</a></li>
                        </ul>
                        </nav>
                    
                    </header>
        <?php 
            // ini_set('display_errors', 1);
            // error_reporting(E_ALL);

            include('../functions.php');

            $id = $_GET['id'];

            $query = "SELECT * FROM `VerzamelDB` WHERE Id = " . $id;

            $result = mysqli_query($db, $query);

            if (mysqli_num_rows($result) > 0) {
                $item = mysqli_fetch_assoc($result);

                ?>
                <div>
                    <form class="center" method="POST" action="edit_item.php">
                        <input type="hidden" name="id" value="<?php echo $item['Id'] ?>">
                        <label>Titel</label><br>
                        <input type="text" name="titel" value="<?php echo $item['NaamItem']?>" required><br>
                        <label>Artiest</label><br>
                        <input type="text" name="artiest" value="<?php echo $item['Artiest']?>" required><br>
                        <label>Genre</label><br>
                        <input type="text" name="genre" value="<?php echo $item['Genre']?>" required><br>
                        <label>Release datum</label><br>
                        <input type="date" name="release" value="<?php echo $item['ReleaseDatum']?>" required><br>
                        <label>Formaat</label><br>
                        <select name="formaat">
                            <option>18 cm(7 inch)</option>
                            <option> 25 cm(10 inch)</option>
                            <option> 30 cm(12 inch)</option>
                        </select><br><br>
                        <label>Beschrijving</label><br>
                        <textarea name="omschrijving" cols="30" rows="10" ></textarea><br>
                        <button type="submit" name="edit_item">Edit</button>
                    </form>
                    
                </div>
            </body>
        </html>
    <?php 
    }
?>