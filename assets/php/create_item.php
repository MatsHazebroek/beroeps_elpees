
<?php 
ini_set('display_errors', 1);
error_reporting(E_ALL);

include('functions.php');

// $db_hostname = 'localhost';
// $db_username = 'DBgebruiker';
// $db_password = 'DBgebruiker';
// $db_database = 'BeroepsDB';

// $mysqli = mysqli_connect($db_hostname, $db_username, $db_password, $db_database);

// if (isset($_POST['verzend'])){
//     $titel = $_POST['titel'];
//     $artiest = $_POST['artiest'];
//     $genre = $_POST['genre'];
//     $release = $_POST['release'];
//     $formaat = $_POST['formaat'];
//     $omschrijving = $_POST['omschrijving'];

//     $query = "INSERT INTO VerzamelDB";
//     $query .= " (NaamItem, Omschrijving, ReleaseDatum, Genre, Formaat, Artiest)";
//     $query .= " VALUES ('{$titel}', '{$omschrijving}', '{$release}', '{$genre}', '{$formaat}', '{$artiest}')";
//     $result = mysqli_query($mysqli, $query); 

// if ($result) {
//     echo "het item is toegevoegd<br>";

// } else {
//     echo "FOUT bij toevoegen<br>";
//     echo $query . "<br>";
//     echo mysqli_error($mysqli);
// }
?>   
<?php
// }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div>
    <form method="POST" action="create_item.php">
    <label>Titel</label><br>
    <input type="text" name="titel" required><br>
    <label>Artiest</label><br>
    <input type="text" name="artiest" required><br>
    <label>Genre</label><br>
    <input type="text" name="genre" required><br>
    <label>Release datum</label><br>
    <input type="date" name="release" required><br>
    <label>Formaat</label><br>
    <select name="formaat">
		<option>18 cm(7 inch)</option>
		<option> 25 cm(10 inch)</option>
		<option> 30 cm(12 inch)</option>
	</select><br><br>
    <label>Beschrijving</label><br>
    <textarea name="omschrijving" cols="30" rows="10"></textarea>
    <button type="submit" name="verzend">create</button>
    </form>
</div>
</body>
</html>