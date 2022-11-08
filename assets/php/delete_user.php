<?php
include('./functions.php');

$id = $_GET['id'];

$queryUser = "DELETE FROM `multi_login` WHERE id = " . $id;

$queryItem = "DELETE FROM `VerzamelDB` WHERE user = " . $id;

$result = mysqli_query($db, $queryUser);

$result2 = mysqli_query($db, $queryItem);

if ($result && $result2) {
    header('location:./home.php');
} else {
    echo mysqli_error($db);
}

    
?>