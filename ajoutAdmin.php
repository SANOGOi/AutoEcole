<?php
    require_once 'acces-db.php'; // Appel fichier connexion bdd

	// if ($_SERVER["REQUEST_METHOD"] == "POST") {
	//   if (empty($_POST["login"])) {
	//     $loginErr = "login requit";
	//   } else {
	//     $login = test_input($_POST["login"]);
	//   }
	  
	//   if (empty($_POST["mdp"])) {
	//     $mdpErr = "Mot de pass requit";
	//   } else {
	//     $mdp = test_input($_POST["mdp"]);
	//   }
	// }
	if(!empty($_POST['mdp']) && !empty($_POST['login'])){ 
		$req = $bdd->prepare('INSERT INTO admin(login, mdp) VALUES(:login, :mdp)');
		$mdphashe = password_hash($_POST["mdp"], PASSWORD_DEFAULT);
		$req->execute(array(
			'login' => $_POST['login'],
			'mdp' => $mdphashe
		));
		echo 'L admin à bien été ajouté!';
	}

	
?>