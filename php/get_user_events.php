<?php
require_once('db.php');

$sql = "SELECT * FROM users, events, user_event WHERE users.id=user_id AND events.id= :id";
$stmt = $conn->prepare($sql);
$stmt	->bindValue(":id",  8);

$stmt	->execute();
$users = $stmt->fetchAll();

var_dump($users);
