<?php
	try {
		$bdd = new PDO('mysql:host=localhost;dbname=bd-auto_ecole;charset=utf8', 'root', '');
	}

	catch (Exception $e) {
	    die('Erreur : ' . $e->getMessage());
	}
?>