<?php
$title = 'Inscription';
$description = '' ;
?>

<?php include_once('layouts/header.php') ?>

<main id="content">



<!-- le formulaire redirige vers la page "register" qui va executer la requete SQL-->

     <form action="php/register.php" method="POST" class="container mt-5 col-lg-6">

      <!-- Pseudo-->
    <div class="form-group">
    <label for="pseudo">Pseudo</label>
      <input type="text" class="form-control is-valid" id="pseudo" name ="pseudo" placeholder="Votre pseudo">
      <small id="pseudo" class="form-text text-muted">Vous apparaitrez sous ce pseudo</small>
      </div>



      <!-- Nom-->
    <div class="form-group">
    <label for="firstname">Nom</label>
      <input type="text" class="form-control is-valid" id="firstname"  name ="firstname" placeholder="Votre nom">
    </div>

    <!-- Prénom-->
    <div class="form-group">
    <label for="lastname">Prénom</label>
      <input type="text" class="form-control is-valid" id="lastname"  name="lastname" placeholder="Votre prénom">
    </div>

    <!-- Email-->
    <div class="form-group">
    <label for="email">Adresse E-mail</label>
      <input type="email" class="form-control is-valid" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email">
      <small id="emailHelp" class="form-text text-muted">Votre adresse e-mail ne sera pas visible par les autres utilisateurs</small>
    </div>

    <!-- Ville-->
    <div class="form-group">
    <label for="email">Ville</label>
      <input type="text" class="form-control is-valid" id="city" name="city" placeholder="votre ville">
    </div>

    <!-- Date de Naissance-->
    <div class="form-group">
    <label for="email">Date de Naissance</label>
      <input type="date" class="form-control is-valid" id="birthdate" name="birthdate" placeholder="votre date de naissance">
    </div>

    <!-- Pseudo-->
    <div class="form-group">
    <label for="password">Mot de Passe</label>
      <input type="password" class="form-control is-valid" id="password" name="password" placeholder="Votre mot de passe">
    </div>
    
    <!--confirmation du mot de passe-->
    <div class="form-group">
    <label for="password_bis">Confirmez votre mot de passe</label>
      <input type="password" class="form-control is-valid" id="password_bis" name="password_bis" placeholder="Valider votre mot de passe">
    </div>

    <button type="submit" class="btn btn-outline-secondary">Envoyer !</button>
</form>

</main>


<?php include_once('layouts/footer.php') ?>
