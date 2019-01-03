<?php
	session_start();
	if(isset($_SESSION['login']) && isset($_SESSION['mdp'])){
		echo 'connexion ok';
	}
		
	else
		header('location: index.html');
?>