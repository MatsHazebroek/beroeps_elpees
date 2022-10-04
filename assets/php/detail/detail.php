<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

$db = mysqli_connect('localhost', 'DBgebruiker', 'DBgebruiker', 'BeroepsDB');

$sql = "select * from `VerzamelDB`";
$result = mysqli_query($db, $sql) or die("Error in Selecting " . mysqli_error($db));

$emparray = array();
while($row =mysqli_fetch_assoc($result))
{
    $emparray[] = $row;
}

echo json_encode($emparray);

?>