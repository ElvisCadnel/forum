<?php
session_start();
require('actions/database.php');

#Validation du formulaire

if (isset($_POST['validate'])) {

  #verification si les champs sont remplis

  if (!empty($_POST['nom']) && !empty($_POST['email']) && !empty($_POST['mdp'] )) {  

  #recupération des données 
  $user_name = htmlspecialchars($_POST['nom']);
  $user_address = htmlspecialchars($_POST['email']);
  $user_password = sha1($_POST['mdp']);
  
  #verifier si l'email ou pseudo de l'utilisateur existe
  $checkUsersexists = $base->prepare('SELECT * FROM users WHERE pseudo = ? AND email = ?');
  $checkUsersexists->execute(array($user_name,$user_address));

  if ($checkUsersexists->rowCount() > 0){
     
    #recuperer les donnees de l'utilisateur 
      $userInfos = $checkUsersexists->fetch();
     
  // Verification du mot de passe
   if ($user_password === $userInfos['mdp']) {
    
   #authentifier l'utilisateur sur le site et récuperer ses donnees 

    $_SESSION['auth'] =true;
    $_SESSION['id'] = $userInfos['id'];
    $_SESSION['nom'] = $userInfos['pseudo'];
    $_SESSION['prenom'] = $userInfos['prenom'];
    $_SESSION['email'] = $userInfos['email'];
   
    #rediriger l'utilisateur vers une autre page 
    header('Location: index.php');

  } else {
  $errormsg = "Votre mot de passe est incorrect";
 }

     
}else{
    $errormsg="Votre pseudo ou email est incorrect";
    }

}else{
  $errormsg="Veuillez compléter tous les champs";
}
}