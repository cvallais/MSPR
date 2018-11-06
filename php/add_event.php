<?php

require_once("db.php");


  $sql ="INSERT INTO users
        VALUES (NULL, :name_event, :place, :date_event, :price, NOW()) ";

        $stmt = $conn->prepare($sql);
        $stmt->bindValue(":name_event",$_POST['name_event']);
        $stmt->bindValue(":place",$_POST['place']);
        $stmt->bindValue(":date_event",$_POST['date_event']);
        $stmt->bindValue(":price",$_POST['price']);

        //on hash le mot de passe
        //algo par défaut : bcrypt
        $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT, [
          'cost'=> 10
        ]);

        $stmt->bindValue(":password",$_POST['password']);

        $stmt->execute();

header("Location: ../events.php")
 ?>