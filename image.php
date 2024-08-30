<?php

if (isset($_POST['validate'])){
  
if ($_SERVER['REQUEST_METHOD'] == "POST"){
 
    if (empty($_FILES['image']['tmp_name'])){   
        header('Location:index.php?message=er');

    }

    $file_basename = pathinfo($_FILES['image']['name'],PATHINFO_FILENAME);
    $file_extension = pathinfo($_FILES['image']['name'],PATHINFO_EXTENSION);

    $new_image_name = $file_basename . '_' . date("Ymd_His") . '.' . $file_extension;

    
    require('actions/database.php');
    
    if (!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['email']) && !empty($_POST['mdp'])) {  

        $checkIsUserAlredyExists = $base->prepare('SELECT pseudo FROM users WHERE pseudo = ?');
    $checkIsUserAlredyExists->execute(array($users_name));
   
  
   if ($checkIsUserAlredyExists->rowCount() == 0){
    $user_id=$_SESSION['id'];

    $sql = "INSERT INTO image (user_id,libelle) VALUES ('$user_id','$new_image_name')";

    if($base->query($sql) === TRUE){
       

    }else{
          $target_directory = "actions/users/images/";
        $target_path = $target_directory . $new_image_name;
        
        $getInfosUser = $base->prepare('SELECT libelle FROM image WHERE user_id = ?');
        $getInfosUser->execute(array($user_id));
        
        $usersInfos = $getInfosUser->fetch();
       
        #authentifier l'utilisateur sur le site et récuperer ses donnees 
        // $_SESSION['image'] = $usersInfos['libelle'];
  
    }
        if(!move_uploaded_file($_FILES["image"]["tmp_name"], $target_path)){
            header("Location:index.php?message=er");
        }
    
    }else{ 
        $errormsg = "L'utilisateur existe déjà veuillez changer de pseudo";
     }  
    }else{ 
       $errormsg = "Veuillez remplir tous les champs";
    }  
}
}