<?php

//get user
$event_id = $_GET['id'];

if(isset($event_id)){
  $id = $event_id;

  /*elseif(isset($id));
  $id = */
  require_once('db.php');
  $sql = "SELECT * FROM events WHERE id= :id";
  $stmt 	= $conn->prepare($sql);
  $stmt	->bindValue(":id",   $id);
  $stmt	->execute();

  $event = $stmt->fetch();

}
