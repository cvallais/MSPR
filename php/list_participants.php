<?php

$id_event=$_GET['id'];


$sql = "SELECT * FROM user_event INNER JOIN users WHERE user_event.event_id=:id_event";
$stmt = $conn->prepare($sql);
$stmt	->bindValue(":id_event", $id_event);
$stmt	->execute();
$participants = $stmt->fetch();
?>
