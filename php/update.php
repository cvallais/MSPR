<?php

require_once("db.php");
session_start();


        $name_event         = htmlspecialchars($_POST['name_event']);
        $place              = htmlspecialchars($_POST['place']);
        $description        = htmlspecialchars($_POST['description']);
        $price              = htmlspecialchars($_POST['price']);
        $small_description  = htmlspecialchars($_POST['small_description']);
        $id_category        = htmlspecialchars($_POST['id_category']);
        $event_id           = htmlspecialchars($_POST['event_id']);
        $date_start         = htmlspecialchars($_POST['date_start']);
        $date_end           = htmlspecialchars($_POST['date_end']);
        $user_id            = htmlspecialchars($_SESSION['user_id']);



  $sql ="UPDATE events
        SET name_event=:name_event, place=:place, date_start=:date_start, date_end=:date_end, price=:price,small_description=:small_description,description=:description, id_category=:id_category 
        WHERE id_user=:id_user AND id=:event_id";

        $stmt = $conn->prepare($sql);
        $stmt->bindValue(":name_event",     $name_event);
        $stmt->bindValue(":place",          $place);
        $stmt->bindValue(":date_start",     $date_start);
        $stmt->bindValue(":date_end",       $date_end);
        $stmt->bindValue(":price",          $price);
        $stmt->bindValue(":small_description",$small_description);
        $stmt->bindValue(":description",    $description);
        $stmt->bindValue(":id_category",    $id_category);
        $stmt->bindValue(":event_id",        $event_id);
        $stmt->bindValue(":id_user",        $user_id);


        $stmt->execute();
header("Location: ../index.php")
 ?>
