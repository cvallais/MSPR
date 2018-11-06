<?php
require_once("db.php");

//On hash le mot de passe
$password = htmlspecialchars($_POST['password']);
$password = password_hash($password, PASSWORD_DEFAULT, ['cost'=> 10]);
$date = date('Y-m-d H:i:s');

//On prépare le sql
$sql ="INSERT INTO users (firstname, lastname, pseudo, email, city, birth_date, password, date_created)
VALUES (:firstname, :lastname, :pseudo, :email, :city, :birth_date, :password, :date_created)";

//On prépare les données
$stmt = $conn->prepare($sql);
$stmt->bindValue(":firstname",  $_POST['firstname']);
$stmt->bindValue(":lastname",   $_POST['lastname']);
$stmt->bindValue(":pseudo",     $_POST['pseudo']);
$stmt->bindValue(":email",      $_POST['email']);
$stmt->bindValue(":city",       $_POST['city']);
$stmt->bindValue(":birth_date", $_POST['birthdate']); 
$stmt->bindValue(":password",   $password);
$stmt->bindValue(":date_created",  $date);

$stmt->execute();

//On redirige
header("Location: ../events.php")
?>