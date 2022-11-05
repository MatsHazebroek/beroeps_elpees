
<?php 
ini_set('display_errors', 1);
error_reporting(E_ALL);

include('functions.php');

if(!isLoggedIn()) {
    header('location:login.php');
    exit;
}
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
    <form method="POST" action="create_item.php" enctype="multipart/form-data">
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
        <label>Cover foto</label><br>
        <input type="file" name="image" required><br>
        <label>Beschrijving</label><br>
        <textarea name="omschrijving" cols="30" rows="10"></textarea>
        <button type="submit" name="create_item">create</button>
    </form>
</div>
</body>
</html>