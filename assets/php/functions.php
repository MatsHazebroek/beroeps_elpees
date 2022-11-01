<?php 
session_start();
ini_set('display_errors', 1);
error_reporting(E_ALL);

$db = mysqli_connect('localhost', 'DBgebruiker', 'DBgebruiker', 'BeroepsDB');

$username = "";
$email    = "";
$errors   = array(); 

if (isset($_POST['register_btn'])) {
	register();
}

if (isset($_POST['verzend'])) {
	createItem();
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
			header('location: home.php');
		}else{
			$query = "INSERT INTO multi_login (username, email, user_type, password) 
					  VALUES('$username', '$email', 'user', '$password')";
			mysqli_query($db, $query);

			$logged_in_user_id = mysqli_insert_id($db);

			$_SESSION['user'] = getUserById($logged_in_user_id);
			$_SESSION['success']  = "You are now logged in";
			header('location: index.php');				
		}
	}
}

function getUserById($id){
	global $db;
	$query = "SELECT * FROM multi_login WHERE id=" . $id;
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

if (isset($_POST['login_btn'])) {
	login();
}

function login(){
	global $db, $username, $errors;

	$username = e($_POST['username']);
	$password = e($_POST['password']);

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
				header('location: home.php');		  
			}else{
				$_SESSION['user'] = $logged_in_user;
				$_SESSION['success']  = "You are now logged in";

				header('location: index.php');
			}
		}else {
			array_push($errors, "Wrong username/password combination");
		}
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


function createItem() {

	global $db, $titel, $artiest, $genre, $release, $formaat, $omschrijving;

	// if (isset($_POST['verzend'])){
		$titel = e($_POST['titel']);
		$artiest = e($_POST['artiest']);
		$genre = e($_POST['genre']);
		$release = e($_POST['release']);
		$formaat = e($_POST['formaat']);
		$omschrijving = e($_POST['omschrijving']);
	
		$query = "INSERT INTO VerzamelDB";
		$query .= " (NaamItem, Omschrijving, ReleaseDatum, Genre, Formaat, Artiest, user)";
		$query .= " VALUES ('{$titel}', '{$omschrijving}', '{$release}', '{$genre}', '{$formaat}', '{$artiest}', '".$_SESSION["user"]["id"]."')";
		$result = mysqli_query($db, $query); 
	
		if ($result) {
			echo "het item is toegevoegd<br>";
		
		} else {
			echo "FOUT bij toevoegen<br>";
			echo $query . "<br>";
			echo mysqli_error($db);
		}   
	// }
	
}