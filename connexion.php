<?php
  session_start();
  require_once 'acces-db.php'; // Appel fichier connexion bdd

  if(isset($_POST['mdp']) && isset($_POST['login'])) {

    $req = $bdd->prepare('SELECT * FROM admin WHERE login= :login');

    $req->execute(['login' => $_POST['login']]);

    $resultat = $req->fetch();
    // var_dump($resultat['mdp']);
    // die();
    if(!empty($resultat) && password_verify($_POST['mdp'], $resultat['mdp'])) {
      // $_SESSION['id']=$resultat->id;
      // $_SESSION['nom']=$resultat->nom;
      // $_SESSION['prenom']=$resultat->prenom;
      $_SESSION['login'] = $resultat['login'];
      $_SESSION['mdp'] = $resultat['mdp'];

      // if(isset($_POST['connexionAuto']) && $_POST['connexionAuto']=="oui")
      // {
      //   setcookie('mail',$_POST['mail'],time() + 365*24*3600,null,null,false,true);
      //   setcookie('login',$_POST['login'],time() + 365*24*3600,null,null,false,true);
      //   setcookie('mdp',$_POST['mdp'],time() + 365*24*3600,null,null,false,true);
      // }
      header('location: connecte.php');
    }
    else{
      header('location: index.html');
    } 
  }
  else
  {
    header('location: ../index.php');
  }