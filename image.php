<?php

if (isset($_POST['validate'])){
  
if ($_SERVER['REQUEST_METHOD'] == "POST"){
 
    if (empty($_FILES['image']['tmp_name'])){   
        header('Location:index.php?message=er');

    }

    $file_basename = pathinfo($_FILES['image']['name'],PATHINFO_FILENAME);
    $file_extension = pathinfo($_FILES['image']['name'],PATHINFO_EXTENSION);

    $new_image_name = $file_basename . '_' . date("Ymd_His") . '.' . $file_extension;

    $user_id=$_SESSION['id'];
    
    require('actions/database.php');


    $sql = "INSERT INTO image (user_id,libelle) VALUES ('$user_id','$new_image_name')";

    if($base->query($sql) === TRUE){
       

    }else{
          $target_directory = "actions/users/images/";
        $target_path = $target_directory . $new_image_name;
        
        $getInfosUser = $base->prepare('SELECT libelle FROM image WHERE user_id = ?');
        $getInfosUser->execute(array($user_id));
        
        $usersInfos = $getInfosUser->fetch();
       
        #authentifier l'utilisateur sur le site et récuperer ses donnees 
        $_SESSION['image'] = $usersInfos['libelle'];
  
  
        if(!move_uploaded_file($_FILES["image"]["tmp_name"], $target_path)){
            header("Location:index.php?message=er");
        }
      
    }
    
}
}