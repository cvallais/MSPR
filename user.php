<?php
$title = 'Utilisateur';
$description = '' ;
?>
<?php include_once('layouts/header.php'); ?>
<?php require_once('./php/db.php'); ?>
<?php include_once('php/get_user.php') ?>



<div class="container mt-5">
  <h1><?php echo $user ->firstname ?></h1>

  <ul>
    <li><?php echo $user ->birth_date ?></li>
    <li><?php echo $user ->city ?></li>
  </ul>


  <!--get user
  if(isset($user_id)){
  $id = $user_id;
} elseif(isset)
-->


<?php include_once('layouts/footer.php'); ?>
