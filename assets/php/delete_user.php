<?php
include('./functions.php');

$id = $_GET['id'];

$queryUser = "DELETE * FROM `multi_login` WHERE id = " . $id;

$queryItem = "DELETE * FROM `VerzamelDB` WHERE user = " . $id;

mysqli_query($db, $queryUser);

mysqli_query($db, $querItem);

header('location:./home.php')
    
?>