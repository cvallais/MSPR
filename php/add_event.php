<?php

require_once("db.php");


  $sql ="INSERT INTO events
        VALUES (NULL, :name_event, :place, :date_event, :price, NOW()) ";

        $stmt = $conn->prepare($sql);
        $stmt->bindValue(":name_event",$_POST['name_event']);
        $stmt->bindValue(":place",$_POST['place']);
        $stmt->bindValue(":date_event",$_POST['date_event']);
        $stmt->bindValue(":price",$_POST['price']);


        $stmt->execute();

header("Location: ../events.php")
 ?>