<?php
//si la persoone n'est pas connectée le reste du code n'est pas nécessaire
if (!empty($_GET['id'])) {
  //on récupère l'id de l'utilisateur dont on veut les informations
  $user_id = $_GET['id'];
  if(isset($user_id)){
    $id = $user_id;
    require_once('db.php');
    $sql = "SELECT * FROM users WHERE id= :id";
    $stmt 	= $conn->prepare($sql);
    $stmt	->bindValue(":id",   $id);
    $stmt	->execute();
    $user = $stmt->fetch();
    //$id = $_SESSION['user_id'];
  }}
