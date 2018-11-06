<?php

require_once("db.php");


  $sql ="INSERT INTO users
        VALUES (NULL, :firstname, :lastname, :pseudo, :email, :city, :birthdate :password, NOW(),NULL) ";

        $stmt = $conn->prepare($sql);
        $stmt->bindValue(":firstname",$_POST['firstname']);
        $stmt->bindValue(":lastname",$_POST['lastname']);
        $stmt->bindValue(":pseudo",$_POST['pseudo']);
        $stmt->bindValue(":email",$_POST['email']);
        $stmt->bindValue(":city",$_POST['city']);
        $stmt->bindValue(":birthdate",$_POST['birthdate']); 

        //on hash le mot de passe
        //algo par défaut : bcrypt
        $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT, [
          'cost'=> 10
        ]);

        $stmt->bindValue(":password",$_POST['password']);

        $stmt->execute();

header("Location: ../events.php")
 ?>