<?php

session_start();
$event_id 		= htmlspecialchars($_POST['event_id']);
$user_id	 	= htmlspecialchars($_SESSION['user_id']);

require_once("db.php");

$sql ="INSERT INTO user_event (user_id, event_id)
VALUES (:user_id, :event_id)";
//On prépare les données
$stmt = $conn->prepare($sql);
$stmt->bindValue(":user_id",   $user_id);
$stmt->bindValue(":event_id",    $event_id);
$stmt->execute();


header("Location: ../index.php");
?>
