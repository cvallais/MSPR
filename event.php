<?php
$title = 'Evénement';
$description = '' ;
?>
<?php include_once('layouts/header.php'); ?>
<?php require_once('./php/db.php'); ?>
<?php include_once('php/get_event.php') ?>



<div class="container mt-5">
  <h1><?php echo $event ->name_event ?></h1>

  <ul>
    <li><?php echo $event ->place ?></li>
    <li><?php echo $event ->date_start ?></li>
    <li><?php echo $event ->date_end ?></li>
  </ul>

<?php include_once('layouts/footer.php'); ?>
