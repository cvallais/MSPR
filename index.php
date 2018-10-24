<?php
$title = 'Acceuil';
$description = '' ;
 ?>


    <?php include_once('layouts/header.php') ?>


    <main id="content">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
            <div class="main">
              <form>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
            //Mon contenu Principal
            </div>
          </div>
          <div class="col-lg-4">
            <aside class="sidebar">
            //Mon sidebar
            </aside>
          </div>

        </div>





      </div>
    </main>

    <?php include_once('layouts/footer.php') ?>
