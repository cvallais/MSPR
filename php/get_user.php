<?php

//get user
 if(isset($user_id)){
   $id = $user_id;

 /*elseif(isset($id));
    $id = */
require_once('db.php');
$sql = "SELECT * FROM users WHERE id= :id";
$stmt 	= $conn->prepare($sql);
$stmt	->bindValue(":id",   $id);
$stmt	->execute();

$user = $stmt->fetchall();
$id = $_SESSION['user_id'];

}
