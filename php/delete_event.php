<?php
session_start();
include_once('get_event.php');
//get user
$event_id = $_GET['id'];

if(isset($event_id)){
  $id = $event_id;

  /*elseif(isset($id));
  $id = */

require_once('db.php');
	$sql = "DELETE  
			FROM events
			WHERE id = :id
			LIMIT 1";
  $stmt 	= $conn->prepare($sql);
  $stmt	->bindValue(":id",   $id);
  $stmt	->execute();

  $event = $stmt->fetch();

}
