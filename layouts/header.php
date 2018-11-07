<head>
  <?php include_once('layouts/head.php');
  session_start();
   ?>

</head>
<body>
  <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#">Logo</a>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item ">
            <a class="nav-link" href="index.php">Accueil <span class="sr-only">(current)</span></a>
          </li>



<?php if (empty($_SESSION['user']['id'])) { 
  ?> 

           <li class="nav-item">
            <a class="nav-link" href="register.php">S'inscrire</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="login.php">Se connecter</a>
          </li>
 
<?php } ?>
         
          <li class="nav-item">
            <a class="nav-link" href="events.php">Les évènements</a>
          </li>


<?php if (isset($_SESSION['user']['id'])) { 
  ?> 

          <li class="nav-item">
            <a class="nav-link" href="logout.php">Déconnection</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="profile.php">Profil</a>
          </li>
 
<?php } ?>


          
 
        

        </ul>
      </div>
    </nav>
  </header>
