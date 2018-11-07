<?php

$firstname 		= htmlspecialchars($_POST['firstname']);
$lastname	 	= htmlspecialchars($_POST['lastname']);
$pseudo 		= htmlspecialchars($_POST['pseudo']);
$description 	= htmlspecialchars($_POST['description']);
$email 			= htmlspecialchars($_POST['email']);
$city 			= htmlspecialchars($_POST['city']);
$birthdate 		= htmlspecialchars($_POST['birthdate']);

//On hash le mot de passe
$password 		= htmlspecialchars($_POST['password']);
$password 		= password_hash($password, PASSWORD_DEFAULT, ['cost'=> 10]);
$date = date('Y-m-d H:i:s');

require_once("db.php");
//On prépare le sql
$sql ="INSERT INTO users (firstname, lastname, pseudo, description, email, city, birth_date, password, date_created)
VALUES (:firstname, :lastname, :pseudo, :description, :email, :city, :birth_date, :password, :date_created)";

//On prépare les données
$stmt = $conn->prepare($sql);
$stmt->bindValue(":firstname",   $firstname);
$stmt->bindValue(":lastname",    $lastname);
$stmt->bindValue(":pseudo",      $pseudo);
$stmt->bindValue(":description", $description);
$stmt->bindValue(":email",       $email);
$stmt->bindValue(":city",        $city);
$stmt->bindValue(":birth_date",  $birthdate);
$stmt->bindValue(":password",    $password);
$stmt->bindValue(":date_created",  $date);

$stmt->execute();

//$user_id = $conn->lastInstertId();
//session_start();
//$_SESSION['id']=$user_id;
session_start();
$_SESSION['connected'] = false;
$_SESSION [errors] = [
	'name' => 'Le nom est trop long',
	'email' => 'L\'email ,n\' est pas bon',
'password' => 'Le mot de passe est faux',
];

//On redirige
header("Location: ../index.php");
?>
