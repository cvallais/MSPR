<?php

require_once("db.php");

  $firstname = $_POST["firstname"];
  $lastname = $_POST['firstname'];

  $sql ="INSERT INTO users
        VALUES (NULL, :firstname, :lastname, :pseudo, :email, :password, NOW(),NULL) ";

        $stmt = $conn->prepare($sql);
        $stmt->bindValue(":firstname",$firstname);
        $stmt->bindValue(":lastname",$lastname);
        $stmt->bindValue(":pseudo",$pseudo);
        $stmt->bindValue(":email",$email);  
        $stmt->bindValue(":password",$password);

        //on hash le mot de passe
        //algo par défaut : bcrypt
        $password = password_hash($password, PASSWORD_DEFAULT, [
          'cost'=> 10
        ]);

        $stmt->bindValue(":password",$password);

        $stmt->execute();

 ?>