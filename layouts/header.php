<head>
  <?php include_once('layouts/head.php');
   include_once('./php/get_user.php'); 
  session_start();
   ?>

</head>
<body>

  <?php include_once('.components/debuger.php')?>

  <header>


<!--navbar-->
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

    <!--si la personne est connectée elle aura accès à ces pages dans le menu-->

    <?php if(empty($_SESSION['connected'])) { ?> 

     <li class="nav-item">
      <a class="nav-link" href="register.php">S'inscrire</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="login.php">Se connecter</a>
    </li>

    <!-- au contraire si la personne n'est pas connectée-->

    <?php } else { ?> 

    <li class="nav-item">
      <a class="nav-link" href="logout.php">Déconnection</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="profile.php">Profil</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="users.php">Utilisateurs</a>
    </li>

    <?php } ?>

    <li class="nav-item">
      <a class="nav-link" href="#debuger" data-toggle="collapse" role="button">Debuger</a>
    </li>



  </ul>
</div>
    </nav>
  </header>
