<?php 


include('./functions.php');

$id = $_POST['id'];

$query = "DELETE FROM `VerzamelDB` WHERE Id = " . $id;

$result = mysqli_query($db, $query);

if ($result) {
    header('location:../../overzicht.php');
} else {
    echo $query;
    mysqli_error($db);
}

?>