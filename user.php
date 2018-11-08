<?php
$title = 'Utilisateur';
$description = '' ;
?>

 
<?php include_once('layouts/header.php'); ?>
<?php require_once('./php/db.php'); ?>
<?php include_once('php/get_user.php') ?>

<div class="container mt-5">


<h1>Le profil de <?php echo $user ->pseudo ?></h1>

  <div class="card mt-5">
<div class="row">

<!-- bloc des informations du profil-->
<div class="col-3 mr-5 ml-5 mt-5 mb-5">
<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h3 class="card-title"><?php echo $user ->pseudo; ?></h3>
    <p class="card-text"><?php echo $user ->description; ?></p>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">Nom :       <?php echo $user ->firstname; ?></li>
    <li class="list-group-item">Prénom :    <?php echo $user ->lastname; ?></li>
    <li class="list-group-item">Ville :     <?php echo $user ->city; ?></li>
    <li class="list-group-item">Email :     <?php echo $user ->email; ?></li>
    <li class="list-group-item">Né.e le :   <?php echo $user ->birth_date; ?></li>
  </ul>
</div>
</div>

<div class="col-3 mr-5 mt-5 mb-5">
<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">Evènements auxquels <?php echo $user ->pseudo; ?> participe</h5>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">Cras justo odio</li>
    <li class="list-group-item">Dapibus ac facilisis in</li>
    <li class="list-group-item">Vestibulum at eros</li>
  </ul>
</div>
</div>

<div class="col-3 mt-5 mb-5">
<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">Evènements que <?php echo $user ->pseudo; ?> a créé</h5>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">Cras justo odio</li>
    <li class="list-group-item">Dapibus ac facilisis in</li>
    <li class="list-group-item">Vestibulum at eros</li>
  </ul>
</div>
</div>
</div>

</div>
</div>
</main>

<?php include_once('layouts/footer.php') ?>

