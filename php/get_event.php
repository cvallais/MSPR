<?php
require_once('db.php');

//on récupère les variables
$name_event = $_POST['name_event'];
$place = $_POST['place'];
$price = $_POST['price'];
$date = $_POST['date'];



//on prépare la requete
$sql = "SELECT * FROM events";
$stmt = $conn->prepare($sql);
$stmt->execute();
$event = $stmt->fetch();

$id_user = $event['id_user'];
