<?php 
include('./functions.php');

$query = "SELECT * FROM `multi_login`";

$result = mysqli_query($db, $query);

if (mysqli_num_rows($result) > 0) {

    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/navBar.css">
        <link rel="stylesheet" href="../css/home.css">
        <title>Admin page</title>
    </head>
    <body>
        <header>
            <a href="#" class="logo"><img src="./assets/img/lp_logo.png" alt=""></a>

            <nav class="navbar">
            <ul>
                <li><a href="../../overzicht.php">Overzicht</a></li>
                <li><a href="#">Admin</a></li>
                <li><a href="./logout.php">Log uit</a></li>
            </ul>
            </nav>
        </header>

        <div class="table">
            <table>
                <tr id="fixed">
                    <th>ID</th>
                    <th>Username</th>
                    <th>E-mail</th>
                    <th>User Type</th>
                    <th></th>
                    <th></th>
                </tr>
                <?php 
                while($item = mysqli_fetch_assoc($result)) {
                    ?>
                        <tr>
                            <th><?php echo $item['id']; ?></th>
                            <th><?php echo $item['username']; ?></th>
                            <th><?php echo $item['email']; ?></th>
                            <th><?php echo $item['user_type']; ?></th>
                            <th><a id="edit" href="./detail/edit_user.php?id=<?php echo $item['id'];?>">Verander</a></th>
                            <th><a id="delete" href="./delete_user.php?id=<?php echo $item['id']; ?>">Verwijder</a></th>
                        </tr>
                    <?php
                }
                ?>
            </table>
        </div>

        
    </body>
    </html>
    <?php 
}
?>