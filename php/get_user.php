<?php
require_once('db.php');
$sql = "SELECT * FROM user";
$stmt = $conn->prepare($sql);
$stmt->execute();
$user = $stmt->fetchall();
