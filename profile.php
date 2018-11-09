<?php
$title = 'Profil';
$description = '' ;
require_once("php/db.php");
include_once('layouts/header.php');
//on récupère l'id de la personne connectée
$id = $_SESSION['user_id'];
//on envoie la requete
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
	<h1>Votre profil</h1>
	<div class="card mt-5">
		<div class="row">
			<!-- bloc des informations du profil-->
			<div class="col-3 mr-5 ml-5 mt-5 mb-5">
				<div class="card" style="width: 18rem;">
					<div class="card-body">
						<h3 class="card-title"><?php echo $profile->pseudo; ?></h3>
						<p class="card-text"><?php echo $profile->description; ?></p>
					</div>
					<ul class="list-group list-group-flush">
						<li class="list-group-item">Nom :       <?php echo $profile->firstname; ?></li>
						<li class="list-group-item">Prénom :    <?php echo $profile->lastname; ?></li>
						<li class="list-group-item">Ville :     <?php echo $profile->city; ?></li>
						<li class="list-group-item">Email :     <?php echo $profile->email; ?></li>
						<li class="list-group-item">Né.e le :   <?php echo $profile->birth_date; ?></li>
					</ul>
				</div>
			</div>
			<div class="col-3 mr-5 mt-5 mb-5">
				<div class="card" style="width: 18rem;">
					<div class="card-body">
						<h5 class="card-title">Evènements auxquels <?php echo $profile->pseudo; ?> participe</h5>
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
						<h5 class="card-title">Evènements que <?php echo $profile->pseudo; ?> a créé</h5>
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
