<?php 
session_start();
// ini_set('display_errors', 1);
// error_reporting(E_ALL);

$db = mysqli_connect('localhost', 'DBgebruiker', 'DBgebruiker', 'BeroepsDB');

$username = "";
$email    = "";
$logged_in_user_id = mysqli_insert_id($db);
$errors   = array(); 

if (isset($_POST['login_btn'])) {
	login();
}

if (isset($_POST['register_btn'])) {
	register();
}

if (isset($_POST['create_item'])) {
	createItem();
}

if (isset($_POST['edit_item'])) {
    editItem();
}

if (isset($_POST['delete'])) {
    deleteItem();
}

function getUserById($id){
	global $db;
	$query = "SELECT * FROM `multi_login` WHERE `id` = " . $id;
	$result = mysqli_query($db, $query);

	$user = mysqli_fetch_assoc($result);
	return $user;
}

function e($val){
	global $db;
	return mysqli_real_escape_string($db, trim($val));
}

function display_error() {
	global $errors;

	if (count($errors) > 0){
		echo '<div class="error">';
			foreach ($errors as $error){
				echo $error .'<br>';
			}
		echo '</div>';
	}
}	

function isLoggedIn()
{
    // session_start();
	if (isset($_SESSION['user'])) {
		return true;
	} else{
		return false;
	}
}

function isAdmin()
{
	if (isset($_SESSION['user']) && $_SESSION['user']['user_type'] == 'admin' ) {
		return true;
	} else{
		return false;
	}
}

function register(){
	global $db, $errors, $username, $email;

	$username    =  e($_POST['username']);
	$email       =  e($_POST['email']);
	$password_1  =  e($_POST['password_1']);
	$password_2  =  e($_POST['password_2']);

	if (empty($username)) { 
		display_error($errors, "Username is required"); 
	}
	if (empty($email)) { 
		display_error($errors, "Email is required"); 
	}
	if (empty($password_1)) { 
		display_error($errors, "Password is required"); 
	}
	if ($password_1 != $password_2) {
		display_error($errors, "The two passwords do not match");
	}

	if (count($errors) == 0) {
		$password = md5($password_1);

		if (isset($_POST['user_type'])) {
			$user_type = e($_POST['user_type']);
			$query = "INSERT INTO multi_login (username, email, user_type, password) 
					  VALUES('$username', '$email', '$user_type', '$password')";
			mysqli_query($db, $query);
			$_SESSION['success']  = "New user successfully created!!";
			header('location:home.php');
		}else{
			$query = "INSERT INTO multi_login (username, email, user_type, password) 
					  VALUES('$username', '$email', 'user', '$password')";
			mysqli_query($db, $query);

			$logged_in_user_id = mysqli_insert_id($db);

			$_SESSION['user'] = getUserById($logged_in_user_id);
			$_SESSION['success']  = "You are now logged in";
            header('location:../../index.php');				
		}
	}
}

function login(){
	global $db, $username, $errors, $user;

	$username = e($_POST['username']);
	$password = e($_POST['password']);
    $user = e($_POST['user']);

	if (empty($username)) {
		display_error($errors, 'Username is required');
	}
	if (empty($password)) {
		display_error($errors, "Password is required");
	}

	if (count($errors) == 0) {
		$password = md5($password);

		$query = "SELECT * FROM multi_login WHERE username='$username' AND password='$password' LIMIT 1";
		$results = mysqli_query($db, $query);

		if (mysqli_num_rows($results) == 1) {
			$logged_in_user = mysqli_fetch_assoc($results);
			if ($logged_in_user['user_type'] == 'admin') {

				$_SESSION['user'] = $logged_in_user;
				$_SESSION['success']  = "You are now logged in";
				header('location:../../index.php');		  
			}else{
				$_SESSION['user'] = $logged_in_user;
				$_SESSION['success']  = "You are now logged in";

				// header('location:../../index.php');
				header('location:../../index.php');		  

			}
		}else {
			array_push($errors, "Wrong username/password combination");
		}
	}
}

function createItem() {

	global $db, $titel, $artiest, $genre, $release, $formaat, $omschrijving, $ImageType, $ret;

	$titel = e($_POST['titel']);
	$artiest = e($_POST['artiest']);
	$genre = e($_POST['genre']);
	$release = e($_POST['release']);
	$formaat = e($_POST['formaat']);
	$omschrijving = e($_POST['omschrijving']);

	$output_dir = "upload/";
	$RandomNum   = time();
	$ImageName      = str_replace(' ','-',strtolower($_FILES['image']['name'][0]));
	$ImageType      = $_FILES['image']['type'][0];

	if (!file_exists($output_dir)) {
		@mkdir($output_dir, 0777);
	}

	$ImageExt = substr($ImageName, strrpos($ImageName, '.'));
	$ImageExt       = str_replace('.','',$ImageExt);
	$NewImageName = $RandomNum.'.'.$ImageExt;
    $ret[$NewImageName]= $output_dir.$NewImageName;

	move_uploaded_file($_FILES["image"]["tmp_name"], $output_dir."/".$NewImageName);

	$query = "INSERT INTO VerzamelDB";
	$query .= " (NaamItem, Omschrijving, ReleaseDatum, Genre, Formaat, Artiest, user, ItemImage)";
	$query .= " VALUES ('{$titel}', '{$omschrijving}', '{$release}', '{$genre}', '{$formaat}', '{$artiest}', '".$_SESSION["user"]["id"]."', '{$NewImageName}')";
	$result = mysqli_query($db, $query); 

	if ($result) {
		echo "het item is toegevoegd<br>";
	} else {
		echo "FOUT bij toevoegen<br>";
		echo $query . "<br>";
		echo mysqli_error($db);
	}
}


function editItem() {

    global $db, $titel, $artiest, $genre, $release, $formaat, $omschrijving, $id;

    $titel = e($_POST['titel']);
    $artiest = e($_POST['artiest']);
    $genre = e($_POST['genre']);
    $release = e($_POST['release']);
    $formaat = e($_POST['formaat']);
    $omschrijving = e($_POST['omschrijving']);
    $id = e($_POST['id']);

	$output_dir = "upload/";
	$RandomNum   = time();
	$ImageName      = str_replace(' ','-',strtolower($_FILES['image']['name'][0]));
	$ImageType      = $_FILES['image']['type'][0];

	if (!file_exists($output_dir)) {
		@mkdir($output_dir, 0777);
	}

	$ImageExt = substr($ImageName, strrpos($ImageName, '.'));
	$ImageExt       = str_replace('.','',$ImageExt);
	$NewImageName = $RandomNum.'.'.$ImageExt;
    $ret[$NewImageName]= $output_dir.$NewImageName;

	move_uploaded_file($_FILES["image"]["tmp_name"], $output_dir."/".$NewImageName);

    $query = "UPDATE `VerzamelDB` SET `NaamItem` = '${titel}', `Artiest` = '${artiest}', `Genre` = '{$genre}', `ReleaseDatum` = '{$release}', 
    `Formaat` = '{$formaat}', `Omschrijving` = '{$omschrijving}', `ItemImage` = '{$NewImageName}' WHERE `Id` = '{$id}'";
    

    $result = mysqli_query($db, $query);

    if ($result) {
        header('location:../../../detail.php?id='.$id);
    } else {
        echo $query;
        mysqli_error($db);
    }
}

function deleteItem() {
    global $db, $id;

    $id = e($_POST['id']);

    $query = "DELETE FROM `VerzamelDB` WHERE Id = " . $id;

    $result = mysqli_query($db, $query);

    if ($result) {
        header('location:../../overzicht.php');
    } else {
        echo $query;
        mysqli_error($db);
    }
}