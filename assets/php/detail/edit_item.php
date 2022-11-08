<!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="../../css/create_item.css">
            <link rel="stylesheet" href="../../css/navBar.css">
            <title>Beroeps Edit Item</title>
        </head>
        <body>
        <header>
                    <a href="#" class="logo"><img src="./assets/img/lp_logo.png" alt=""></a>
                    
                        <nav class="navbar">
                        <ul>
                            <li><a href="../../../overzicht.php">Overzicht</a></li>
                            <li><a href="../logout.php">Log uit</a></li>
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
                    <form class="center" method="POST" action="edit_item.php" enctype="multipart/form-data">
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
                            <?php 
                            switch($item["Formaat"]) {
                                case "18 cm(7 inch)":
                                    ?>
                                    <option selected>18 cm(7 inch)</option>
                                    <option>25 cm(10 inch)</option>
                                    <option>30 cm(12 inch)</option>
                                    <?php
                                    break;
                                case "25 cm(10 inch)":
                                    ?>
                                    <option>18 cm(7 inch)</option>
                                    <option selected>25 cm(10 inch)</option>
                                    <option>30 cm(12 inch)</option>
                                    <?php
                                    break;
                                case "30 cm(12 inch)":
                                    ?>
                                    <option>18 cm(7 inch)</option>
                                    <option>25 cm(10 inch)</option>
                                    <option selected>30 cm(12 inch)</option>
                                    <?php
                                    break;
                            }
                            ?>
                        </select><br><br>
                        <label>Cover foto</label>
                        <input id="file" type="file" name="image" required><br><br>
                        <label>Beschrijving</label><br>
                        <textarea name="omschrijving" cols="30" rows="10" ><?php echo $item['Omschrijving']?></textarea><br>
                        <button type="submit" name="edit_item">Edit</button>
                    </form>
                </div>
            </body>
        </html>
    <?php 
    }
?>