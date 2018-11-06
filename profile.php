<?php
$title = 'Profil';
$description = '' ;

require_once("php/db.php");
include_once('layouts/header.php');

$id = $_SESSION['user']['id'];

$sql = "SELECT * FROM users WHERE id = :id";

	$stmt = $conn->prepare($sql);
	//donne la valeur à notre parametre nommé dans la requete SQL
	$stmt->bindValue(":id",$id);
	$stmt->execute();
	//récupère une seule ligne, donc fetch() et non fetchall()
	$profile = $stmt->fetch();
	
?>

<?php include_once('layouts/header.php') ?>

<div class="container mt-5">
<h1>Profil</h1>

<div class="infos profil">
<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h3 class="card-title"><?php echo $profile['pseudo']; ?></h3>
    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus, quis, soluta. Atque quo eum explicabo reprehenderit, tenetur placeat eaque dolor aut ipsa, possimus sapiente rerum et fugit iure ducimus sit!</p>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item"><?php echo $profile['firstname']; ?></li>
    <li class="list-group-item"><?php echo $profile['lastname']; ?></li>
    <li class="list-group-item"><?php echo $profile['city']; ?></li>
    <li class="list-group-item"><?php echo $profile['email']; ?></li>
    <li class="list-group-item"><?php echo $profile['birth_date']; ?></li>
    <li class="list-group-item"><?php echo $profile['date_created']; ?></li>
  </ul>
  <div class="card-body">
    <a href="#" class="card-link">Card link</a>
    <a href="#" class="card-link">Another link</a>
  </div>
</div>
</div>

<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">Evènements auxquels <?php echo $profile['pseudo']; ?> participe</h5>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">Cras justo odio</li>
    <li class="list-group-item">Dapibus ac facilisis in</li>
    <li class="list-group-item">Vestibulum at eros</li>
  </ul>
  <div class="card-body">
    <a href="#" class="card-link">Card link</a>
    <a href="#" class="card-link">Another link</a>
  </div>
</div>


<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">Evènements que <?php echo $profile['pseudo']; ?> a créé</h5>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">Cras justo odio</li>
    <li class="list-group-item">Dapibus ac facilisis in</li>
    <li class="list-group-item">Vestibulum at eros</li>
  </ul>
  <div class="card-body">
    <a href="#" class="card-link">Card link</a>
    <a href="#" class="card-link">Another link</a>
  </div>
</div>

</div>
</main>

<?php include_once('layouts/footer.php') ?>
