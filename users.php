
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
		<a href="user.php?id=<?php echo $user ->id;?>" class="btn btn-outline-secondary"><?php echo $user ->pseudo; ?></a>
	</div>

<?php } ?>
</ul>

<?php include_once('layouts/footer.php') ?>
