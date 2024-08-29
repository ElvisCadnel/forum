<?php
 require('actions/database.php');

 #recuperer l'identifient du user
  if (isset($_GET['id']) && !empty($_GET['id'])){
   # stocker l'id dans une var
    $idUsers = $_GET['id'];
#verrifier si l'user exist
    $checkUsersExists = $base->prepare("SELECT pseudo, prenom, email FROM users WHERE id = ?");
    $checkUsersExists->execute(array($idUsers));
     
    if ($checkUsersExists->rowCount() > 0){

       #recuperer les donnees de l'user	
      $usersInfos = $checkUsersExists->fetch();
      
      $user_pseudo = $usersInfos['pseudo'];
      $user_name = $usersInfos['prenom'];
      $user_email = $usersInfos['email'];
      
      #recuperer les questions de l'user

      $getQuestionuser = $base->prepare('SELECT * FROM questions WHERE id_autheur = ? ORDER BY id DESC');
      $getQuestionuser->execute(array($idUsers));

    }else{
    $errormsg="Aucun utilisateur n'est trouvé";
  }


  }
  else{
    $errormsg="Aucun utilisateur n'est trouvé";

  }
