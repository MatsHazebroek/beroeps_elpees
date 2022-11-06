<?php
include('./functions.php');

$id = $_GET['id'];

$query = "DELETE FROM `VerzamelDB` WHERE Id = " . $id;

$result = mysqli_query($db, $query);

header('location:../../overzicht.php')
    
?>