<?php
$id = $_POST['delete_id'];

require_once('db.php');
$sql = "DELETE FROM events WHERE id = :id";
$stmt = $conn->prepare($sql);
$stmt->bindValue(":id", $id);
$stmt->execute();

header('Location: ../');
