<?php
//on se connecte à la DB
require_once("db.php");
include("../layouts/head.php");

//si le formulaire et soumis...
if(isset($_POST)){
	$email 		= htmlspecialchars($_POST['email']);
	$password 	= htmlspecialchars($_POST['password']);

	//on selectionne l'utilisateur en fonction de l'email
	$sql = "SELECT * FROM users WHERE email=:email";
	$stmt = $conn->prepare($sql);
	$stmt->bindValue(":email", $email);
	$stmt->execute();

	//on ne sélectionne que pour un seul utilisateur
	$user = $stmt->fetch();

	//si on a trouvé un résultat...
	if(isset($user)) {



		//on vérifie son mot de passe
		$passwordIsOK = password_verify($password, $user->password);

		//si le mdp est le bon...
		if ($passwordIsOK) {
			
			//on connecte le member
			session_start();
			$_SESSION['connected'] = true;
			$_SESSION['user_id'] = $user->id;
			header("Location:../index.php");
			//sinon...
		} else {?>
			<div class="alert alert-danger">L'email ne correspond pas au mot de passe !</div>
			<button type="button" class="btn btn-warning" href="login.php">Try again !</button>
			<?php
		}
	}
} ?>