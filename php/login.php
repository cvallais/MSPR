<?php
//on se connecte à la DB
require_once("db.php");

//si le formulaire et soumis...
if(isset($_POST)){
	$pseudo = htmlspecialchars($_POST['pseudo']);
	$password = htmlspecialchars($_POST['password']);

	// on selectionne l'utilisateur en fonction de l'email
	$sql = "SELECT *
	FROM users
	WHERE pseudo = :pseudo";
	$stmt = $conn->prepare($sql);
	$stmt->bindValue(":pseudo", $pseudo);
	$stmt->execute();
	//on ne sélectionne que pour un seul utilisateur
	$user = $stmt->fetch();
	//si on a trouvé un résultat...
	if (isset($users)) {
		//on vérifie son mot de passe
		$passwordIsOK = password_verify($password, $user['password']);

		//si le mdp est le bon...
		if ($passwordIsOK) {
			//on connecte le member

			$_SESSION['users'] = $user;
		}
		else {
			$error = "mauvais identifiants !";
		}
	}
}

?>
coucou
