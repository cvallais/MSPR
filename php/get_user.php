<?php

//get user
 if(isset($user_id)){
   $id = $user_id;
 }
 /*elseif(isset($firstname));
    $firstname = */
require_once('db.php');
$sql = "SELECT * FROM users";
$stmt = $conn->prepare($sql);
$stmt->execute();
$user = $stmt->fetchall();
$id = $_SESSION['user']['id'];
