<?php
include('./functions.php');

$id = $_GET['id'];

$query = "DELETE FROM `VerzamelDB` WHERE Id = " . $id;

$result = mysqli_query($db, $query);

if (mysqli_num_rows($result) > 0) {
    $item = mysqli_fetch_assoc($result);

    ?>

        <form action="verwijder.php" method="post">

            <button type="submit" name="delete">Verwijder</button>
        </form>
        

    <?php 
}
    
?>