<?php
$title = 'Se connecter';
$description = '' ;
?>
<?php include_once('layouts/header.php') ?>
<div class="card container mt-5 col-lg-6">
  <form action="php/login.php" method="POST" >
    <!--email-->
    <div class="form-group">
      <label for="email">E-mail</label>
      <input type="email" class="form-control" id="email" name="email" placeholder="Votre e-mail">
    </div>
    <!--mot de passe-->
    <div class="form-group">
      <label for="exampleInputPassword1">Password</label>
      <input type="password" class="form-control" id="password" name="password" placeholder="Password">
    </div>
    <button type="submit" class="btn btn-outline-secondary">Connection</button>
  </form>
</div>
<?php include_once('layouts/footer.php') ?>
