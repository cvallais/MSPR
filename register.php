<?php
$title = 'Inscription';
$description = '' ;

?>

    <?php include_once('layouts/header.php') ?>

		<main id="content">



     <form action="php/register.php" method="POST" class="container">


    <div class="form-group">
    <label for="pseudo">Pseudo</label>
    <input type="text" class="form-control" id="pseudo"  placeholder="Votre pseudo">
    <small id="pseudo" class="form-text text-muted">Vous apparaitrez sous ce pseudo</small>
  </div>

  <div class="form-group">
    <label for="firstname">Nom</label>
    <input type="text" class="form-control" id="firstname"  placeholder="Votre nom">
  </div>

  <div class="form-group">
    <label for="lastname">Prénom</label>
    <input type="text" class="form-control" id="lastname"  placeholder="Votre prénom">
  </div>


  <div class="form-group">
    <label for="email">Adresse E-mail</label>
    <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">Votre adresse e-mail ne sera pas visible par les autres utilisateurs</small>
  </div>



  <div class="form-group">
    <label for="password">Mot de Passe</label>
    <input type="password" class="form-control" id="password" placeholder="Votre mot de passe">
  </div>

  <div class="form-group">
    <label for="password_bis">Confirmez votre mot de passe</label>
    <input type="password" class="form-control" id="password_bis" placeholder="Valider votre mot de passe">
  </div>

  <button type="submit" class="btn btn-primary">Envoyer !</button>
</form>

</main>


  <?php include_once('layouts/footer.php') ?>
