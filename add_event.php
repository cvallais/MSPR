<?php
$title = 'Ajouter Evenement';
$description = '' ;
?>


<?php include_once('layouts/header.php') ?>

<div class="container">

<h1>Ajouter un évènement</h1>

<!--------------------formulaire---------------------->

<form action="php/add_event.php" method="POST" class="container col-lg-6 mt-5">


    <div class="form-group">
    <label for="name_event">Nom de l'évènement</label>
      <input type="text" class="form-control" id="name_event" name ="name_event" placeholder="Nom de l'évènement">
      </div> 

    <div class="form-group">
    <label for="place">Lieu</label>
      <input type="text" class="form-control" id="place"  name ="place" placeholder="Lieu de l'évènement">
    </div>

    <div class="form-group">
    <label for="date_start">Date de début de l'évènement</label>
      <input type="date" class="form-control" id="date_start"  name="date_start" placeholder="date début">
    </div> 

    <div class="form-group">
    <label for="date_end">Date de fin l'évènement</label>
      <input type="date" class="form-control" id="date_end"  name="date_end" placeholder="date fin">
    </div>

    <div class="form-group">
    <label for="small_description">Petite description (facultative)</label>
      <textarea type="text" class="form-control" id="small_description"  name="small_description" placeholder="description"></textarea>
      <small id="small_description" class="form-text text-muted">Vous êtes limité à 250 caractères</small>
    </div> 

    <div class="form-group">
    <label for="description">Description complète(facultative)</label>
      <textarea type="text" class="form-control" id="description"  name="description" placeholder="description"></textarea>
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

    <button type="submit" class="btn btn-primary">Créer !</button>
</form>

</div>
</main>

<?php include_once('layouts/footer.php') ?>
