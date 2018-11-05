<?php
$title = 'Inscription';
$description = '' ;
 ?>


    <?php include_once('layouts/header.php') ?>

		<main id="content">

              <form action="php/register.php" method="POST">

      
    <div class="form-group">
    <label for="name">Nom</label>
    <input type="text" class="form-control" id="name"  placeholder="Votre nom">
    <small id="name" class="form-text text-muted">Vous apparaitrez sous ce nom</small>
  </div>

        	
  <div class="form-group">
    <label for="exampleInputEmail1">Adresse E-mail</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">Votre adresse e-mail ne sera pas visible par les autres utilisateurs</small>
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Mot de Passe</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  
  <button type="submit" class="btn btn-primary">Envoyer !</button>
</form>

</main>


  <?php include_once('layouts/footer.php') ?>
