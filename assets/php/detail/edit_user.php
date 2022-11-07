<!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Edit User</title>
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
                <div>
                    <form method="post" action="edit_item.php">
                        <input type="hidden" name="id" value="<?php echo $item['id'] ?>">
                        <label>Username:</label>
                        <input class="input pass" type="text" name="username" value="<?php echo $item['username'] ?>">
                        <label>E-mail:</label>
                        <input class="input pass" type="email" name="email" value="<?php echo $item['email'] ?>">

                        <label>User type</label> 
                        <select name="user_type" id="user_type">
                            <option value=""></option>
                            <option value="admin">Admin</option>
                            <option value="user">User</option>
                        </select>

                        <input type="submit" class="inputButton" name="edit_user">
                    </form>
                </div>
            </body>
        </html>
    <?php 
    }
?>