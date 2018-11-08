<?php

require_once("db.php");
session_start();

  $sql ="INSERT INTO events
        VALUES (NULL, :name_event, :place, :date_start, :date_end, :price,:small_description,:description, :id_category, :id_user,NOW()) ";

        $stmt = $conn->prepare($sql);
        $stmt->bindValue(":name_event",     $_POST['name_event']);
        $stmt->bindValue(":place",          $_POST['place']);
        $stmt->bindValue(":date_start",     $_POST['date_start']);
        $stmt->bindValue(":date_end",       $_POST['date_end']);
        $stmt->bindValue(":small_description",$_POST['small_description']);
        $stmt->bindValue(":description",    $_POST['description']);
        $stmt->bindValue(":price",          $_POST['price']);
        $stmt->bindValue(":id_category",    $_POST['id_category']);
        $stmt->bindValue(":id_user",        $_SESSION['user_id']);


        $stmt->execute();

header("Location: ../index.php")
 ?>
