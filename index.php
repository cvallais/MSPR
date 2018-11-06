<?php
$title = 'Accueil';
$description = '' ;

$db= new PDO('mysql:host=localhost;dbname=mspr1;port=3306;charset=UTF8;','root','');
$events = $db->query( 'SELECT * FROM events ORDER BY id LIMIT 5' );

?>


<?php include_once('layouts/header.php') ?>
<div class="container">
<h1>Les meilleurs événements sur Nantes</h1>
<h2>Liste de nos événements sur Nantes</h2>

<?php foreach ($events as $event) {?>
<tr>
  <td>Quoi ? <?php echo $event['name_event'];?></td>
  <td>Où ? <?php echo $event['place'];?></td>
  <td>Quand ? <?php echo $event['date'];?></td>
  <td>Combien ? <?php echo $event['price'];?>€</td>
</tr>
<br>
  <?php } ?>



  <div class="list-group">
    <?php foreach ($events as $event) {?>
    <a href="#" class="list-group-item list-group-item-action active">
      <?php echo $event['name_event'];?>couou
    </a>
    <a href="#" class="list-group-item list-group-item-action"><?php echo $event['name_event'];?></a>
    <a href="#" class="list-group-item list-group-item-action"><?php echo $event['name_event'];?></a>
    <a href="#" class="list-group-item list-group-item-action"><?php echo $event['name_event'];?></a>
    <a href="#" class="list-group-item list-group-item-action disabled"><?php echo $event['name_event'];?></a>
  </div>
<?php } ?>




</div>
</main>
</div>
<?php include_once('layouts/footer.php') ?>
