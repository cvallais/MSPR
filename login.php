<?php
$title = 'Se connecter';
$description = '' ;
?>


<?php include_once('layouts/header.php') ?>
<div class="container">

<form>
  <div class="form-group">
    <label for="pseudo">Pseudo</label>
    <input type="text" class="form-control" id="pseudo" placeholder="Votre pseudo">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="password" placeholder="Password">
  </div>
<button type="submit" class="btn btn-primary">Submit</button>



<?php include_once('layouts/footer.php') ?>
</div>
