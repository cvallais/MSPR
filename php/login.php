<?php
//on se connecte à la DB
require_once("db.php");
$error='';

//si le formulaire et soumis...
if(isset($_POST)){
	$email = htmlspecialchars($_POST['email']);
	$password = htmlspecialchars($_POST['password']);

	// on selectionne l'utilisateur en fonction de l'email
	$sql = "SELECT email, password FROM users WHERE email=:email";
	$stmt = $conn->prepare($sql);
	$stmt->bindValue(":email", $email);
	$stmt->execute();
	//on ne sélectionne que pour un seul utilisateur
	$user = $stmt->fetch();


echo $user['password'];
	//si on a trouvé un résultat...
	if (isset($user)) {
		//on vérifie son mot de passe
		$passwordIsOK = password_verify($password,$user['password']);

		//si le mdp est le bon...
		if ($passwordIsOK) {
			//on connecte le member
			
			echo "ça marche";
		}
		else {
			$error = "L'email ne correspond pas au mot de passe !";
		}
	}
}
var_dump($password);
var_dump($user['password']);
echo $error;
?>


<?php include_once('../layouts/footer.php') ?>
