<?php
$title = 'Evénement';
$description = '' ;
?>
<?php include_once('layouts/header.php'); ?>
<?php require_once('./php/db.php'); ?>
<?php include_once('php/get_event.php') ?>



<div class="container mt-5">


  <div class="card mt-5">
<div class="row">

  <!-- bloc des informations du profil-->
  <div class="col-3 mr-5 ml-5 mt-5 mb-5">
  <div class="card" style="width: 18rem;">
    <div class="card-body">
      <h3 class="card-title"><?php echo $event->name_event; ?></h3>
      <p class="card-text"><?php echo $event->description; ?></p>
    </div>
    <ul class="list-group list-group-flush">
      <li class="list-group-item">Nom :       <?php echo $event ->name_event; ?></li>
      <li class="list-group-item">Date de début :    <?php echo $event ->date_start; ?></li>
      <li class="list-group-item"> Date de fin:     <?php echo $event ->date_end; ?></li>
      <li class="list-group-item">Ville :     <?php echo $event ->place; ?></li>
    </ul>
  </div>
  </div>


  <div class="col-3 mr-5 mt-5 mb-5">
<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">Description complète</h5>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item"><?php echo $event ->description; ?></li>
  </ul>
</div>
</div>


  <div class="col-3 mr-5 mt-5 mb-5">
<div  style="width: 18rem;">
  
  <ul class="list-group list-group-flush">

    <?php if ($_SESSION['user_id'] == $event->id_user) { ?>
      <form action="php/delete_event.php" method="POST">
        <button class="btn btn-outline-success mt-5 col-12" >Je participe !</button>
      </form>
    <?php } ?>


    <?php if ($_SESSION['user_id'] == $event->id_user) { ?>
      <form action="php/delete_event.php" method="POST">
        <button class="btn btn-outline-warning mt-5 col-12" >Modifier l'évènement</button>
      </form>
    <?php } ?>


    <?php if ($_SESSION['user_id'] == $event->id_user) { ?>
      <form action="php/delete_event.php" method="POST">
        <input type="hidden" name="delete_id" value="<?php echo $event->id ?>">
        <button class="btn btn-outline-danger mt-5 col-12" >Supprimer l'évènement</button>
      </form>
    <?php } ?>

  </ul>
</div>
</div>

</div>
</div>

<?php include_once('layouts/footer.php'); ?>
