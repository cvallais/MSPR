<?php
session_start();

require_once("db.php");

$error = "";
//si le formulaire et soumis...
if (!empty($_POST)) {
	$pseudo = $_POST['pseudo'];
	$password = $_POST['password'];

  $sql = "SELECT *
	FROM users
	WHERE pseudo = :pseudo";
	$stmt = $conn->prepare($sql);
	$stmt->bindValue(":pseudo", $pseudo);
	$stmt->execute();
	$users = $stmt->fetch();
