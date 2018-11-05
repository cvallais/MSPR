<?php
//on va utiliser la variable session
session_start();
//détruire la session (tout)
session_destroy();

//on redirige 
 header('Location: login.php');

?>