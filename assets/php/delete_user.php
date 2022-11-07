<?php
include('./functions.php');

$id = $_GET['id'];

$query = "DELETE FROM `multi_login` WHERE id = " . $id;

$result = mysqli_query($db, $query);

header('location:./home.php')
    
?>