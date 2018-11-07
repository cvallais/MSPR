<?php

require_once("db.php");
session_start();

  $sql ="INSERT INTO events
        VALUES (NULL, :name_event, :place, :date_start, :date_end, :price, :id_category, :id_user,NOW()) ";

        $stmt = $conn->prepare($sql);
        $stmt->bindValue(":name_event",$_POST['name_event']);
        $stmt->bindValue(":place",$_POST['place']);
        $stmt->bindValue(":date_start",$_POST['date_start']); 
        $stmt->bindValue(":date_end",$_POST['date_end']);
        $stmt->bindValue(":price",$_POST['price']);
        $stmt->bindValue(":id_category",$_POST['id_category']);
        $stmt->bindValue(":id_user",$_SESSION['user']['id']);


        $stmt->execute();

header("Location: ../events.php")
 ?>