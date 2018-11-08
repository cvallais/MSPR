<?php
$title = 'Evénement';
$description = '' ;
?>
<?php include_once('layouts/header.php'); ?>
<?php require_once('./php/db.php'); ?>
<?php include_once('php/get_event.php') ?>



<div class="container mt-5">
  <!-- bloc des informations du profil-->
  <div class="col-3 mr-5 ml-5 mt-5 mb-5">
  <div class="card" style="width: 18rem;">
    <div class="card-body">
      <h3 class="card-title"><?php echo $event->name_event; ?></h3>
      <p class="card-text"><?php echo $event->description; ?></p>
    </div>
    <ul class="list-group list-group-flush">
      <li class="list-group-item">Nom :       <?php echo $event ->name_event; ?></li>
      <li class="list-group-item">Prénom :    <?php echo $event ->date_start; ?></li>
      <li class="list-group-item">Ville :     <?php echo $event ->date_end; ?></li>
      <li class="list-group-item">Email :     <?php echo $event ->place; ?></li>
    </ul>
  </div>
  </div>

<?php include_once('layouts/footer.php'); ?>
