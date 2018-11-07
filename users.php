
<?php
$title = 'Profil';
$description = '' ;

require_once("php/db.php");
include_once('layouts/header.php');

 include_once('php/get_users.php') ?>

<div class="container mt-5 col-lg-6">
<ul>
	<?php foreach($users as $user){?>
	<div class="card">
		<button class="btn btn-outline-secondary" href="user?user_id=<?php echo $user["id"];?>"><?php echo $user["pseudo"]; ?></button cl>
	</div>
	
<?php } ?>
</ul>

<?php include_once('layouts/footer.php') ?>
