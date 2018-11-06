<?php
$title = 'Se connecter';
$description = '' ;
?>


<?php include_once('layouts/header.php') ?>


<form action="php/login.php" method="POST" class="container mt-5">

  <div class="form-group">
    <label for="email">E-mail</label>
    <input type="email" class="form-control" id="email" name="email" placeholder="Votre e-mail">
  </div>


  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
  </div>
  <button type="submit" class="btn btn-primary">Connection</button>
</form>


<?php include_once('layouts/footer.php') ?>