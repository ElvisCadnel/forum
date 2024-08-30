<?php
 #dans la bd pseudo -> name'nom' -> pseudo, nom name'prenom' -> prenom , email name'email'->email, password name'mdp' -> mdp;
 # 
   session_start();  


   require('actions/database.php');

  #Validation du formulaire
 
  if (isset($_POST['validate'])) {

    #verification si les champs sont remplis

    if (!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['email']) && !empty($_POST['mdp'])) {  

    #recupération des données 
    $users_name = htmlspecialchars($_POST['nom']);
    $users_surname = htmlspecialchars($_POST['prenom']);
    $users_address = htmlspecialchars($_POST['email']);   
    $users_password = sha1($_POST['mdp']);
   
  # verifier si l'utilisateur exist deja
    $checkIsUserAlredyExists = $base->prepare('SELECT pseudo FROM users WHERE pseudo = ?');
    $checkIsUserAlredyExists->execute(array($users_name));
   
  
   if ($checkIsUserAlredyExists->rowCount() == 0){
      
       #inserer l'user dans la bd 
       $insert=$base->prepare('INSERT INTO users(pseudo,prenom,email,mdp) VALUES (?,?,?,?)');
        $insert->execute(array($users_name,$users_surname,$users_address,$users_password));
       
        #recupération des donnes du users
        $getInfosUser = $base->prepare('SELECT id,pseudo,prenom,email FROM users WHERE pseudo = ? AND prenom = ? AND email = ?');
        $getInfosUser->execute(array($users_name,$users_surname,$users_address));
        
        $usersInfos = $getInfosUser->fetch();
       
        #authentifier l'utilisateur sur le site et récuperer ses donnees 
        $_SESSION['auth'] =true;
        $_SESSION['id'] = $usersInfos['id'];
        $_SESSION['nom'] = $usersInfos['pseudo'];
        $_SESSION['prenom'] = $usersInfos['prenom'];
        $_SESSION['email'] = $usersInfos['email'];
       
        #rediriger l'utilisateur vers une autre page 
        header('Location: index.php');
        

    }
   else{
      $errormsg="Cet utilisateur existe déjà. Vueillez  changer de pseudo";
   }
   
}
 else{
  $errormsg="Veuillez compléter tous les champs";
  }
}

