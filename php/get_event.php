<?php

//get user
if(isset($event_id)){
  $id = $event_id;

  /*elseif(isset($id));
  $id = */
  require_once('db.php');
  $sql = "SELECT * FROM events WHERE id= :id";
  $stmt 	= $conn->prepare($sql);
  $stmt	->bindValue(":id",   $id);
  $stmt	->execute();

  $user = $stmt->fetch();
  $id = $_SESSION['event_id'];

}
