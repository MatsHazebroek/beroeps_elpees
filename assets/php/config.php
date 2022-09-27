<?php 

init_set('display_errors', 1);
error_reporting(E_ALL);

// database logingegevens
$db_hostname = 'localhost';
$db_username = 'DBgebruiker';
$db_password = 'DBgebruiker';
$db_database = 'VerzamelDB';

// database-verbinding
$mysqli = mysqli_connect($db_hostname, $db_username, $db_password, $db_database);

// Als de verbinding niet gemaakt kan worden: geef een melding
if (!$mysqli) {
    echo "FOUTL geen connectie naar de database. <br>";
    echo "Error: " . mysqli_connect_error() . "<br>";
    exit;
}

else {
    echo "Verbinding met " . $db_database . " is gemaakt!<br>";
}
?>

?>