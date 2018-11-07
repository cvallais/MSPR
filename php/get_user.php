<?php

//get user
 if(isset($user_id)){
   $id = $user_id;
 } elseif(isset)
  

require_once('db.php');
$sql = "SELECT * FROM user";
$stmt = $conn->prepare($sql);
$stmt->execute();
$user = $stmt->fetchall();
