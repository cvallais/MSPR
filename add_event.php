<?php
$title = 'Ajouter Evenement';
$description = '' ;
?>


<?php include_once('layouts/header.php') ?>

<div class="container">

<h1>Ajouter un évènement</h1>

<form action="php/add_event.php" method="POST" class="container mt-5">


    <div class="form-group">
    <label for="name_event">Nom de l'évènement</label>
      <input type="text" class="form-control" id="name_event" name ="name_event" placeholder="Nom de l'évènement">
      </div> 

    <div class="form-group">
    <label for="place">Lieu</label>
      <input type="text" class="form-control" id="place"  name ="place" placeholder="Lieu de l'évènement">
    </div>

    <div class="form-group">
    <label for="date_event">Date de l'évènement</label>
      <input type="date" class="form-control" id="date_event"  name="date_event" placeholder="date évenement">
    </div>

    <div class="form-group">
    <label for="date_event">Catégorie</label>
      <input type="text" class="form-control" id="id_category"  name="id_category" placeholder="catégorie">
    </div>


    <div class="form-group">
    <label for="price">Prix</label>
      <input type="number" class="form-control" id="price" name="price" aria-describedby="emailHelp" placeholder="prix">
      <small id="emailHelp" class="form-text text-muted">Entrez le prix minimum de l'évènement</small>
    </div>

    <?php 
    echo $_SESSION['user']['id']; ?>
    <name="id_user"=<?php$_SESSION['user']['id']; ?>>

    <button type="submit" class="btn btn-primary">Créer !</button>
</form>

</div>
</main>

<?php include_once('layouts/footer.php') ?>
