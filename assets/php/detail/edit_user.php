<!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="../../css/edit_user.css">
            <title>Beroeps Edit User</title>
        </head>
        <body>

        <?php 
            // ini_set('display_errors', 1);
            // error_reporting(E_ALL);

            include('../functions.php');

            $id = $_GET['id'];

            $query = "SELECT * FROM `multi_login` WHERE id = " . $id;

            $result = mysqli_query($db, $query);

            if (mysqli_num_rows($result) > 0) {
                $item = mysqli_fetch_assoc($result);

                ?>
                <div class="main">
                    <div class="sub">
                    <form method="post" action="edit_item.php">
                        <input class="input" type="hidden" name="id" value="<?php echo $item['id'] ?>">
                        <input class="input" class="input pass" type="text" name="username" placeholder="Username" value="<?php echo $item['username'] ?>"><br><br>
                        <input class="input" class="input pass" type="email" name="email" placeholder="E-mail" value="<?php echo $item['email'] ?>"><br><br>

                        <label>User type</label> 

                        <select name="user_type" id="user_type">
                            <?php 
                            switch($item["user_type"]) {
                                case "admin":
                                    ?>
                                    <option value="admin" selected>Admin</option>
                                    <option value="user">User</option>
                                    <?php
                                    break;
                                case "user":
                                    ?>
                                    <option value="admin">Admin</option>
                                    <option value="user" selected>User</option>
                                    <?php
                                    break;
                            }
                            ?>
                        </select>
                        <br><br>

                        <input type="submit" class="inputButton" name="edit_user">
                    </form>
                </div>
            </div>
            </body>
        </html>
    <?php 
    }
?>