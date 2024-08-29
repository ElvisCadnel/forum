<?php

session_start();

require('../database.php');

if (isset($_SESSION['auth'])){
    header('Location: ../../login.php');
}
#verifier si l'url est passe en parametre par l'id
 if (isset($_GET['id']) && !empty($_GET['id'])){
   #id de la question a supprimer 
   $idOftheQuestion= $_GET['id']; 
 # verifiervsi la question existe
   $checkQuestionExist= $base->prepare("SELECT id_autheur FROM questions WHERE id = ?");
    $checkQuestionExist->execute(array($idOftheQuestion));
   
        if ($checkQuestionExist->rowCount()>0){
       
      # récuperation de donnees de l'user pour voir si il est l'auteur de la publication
        $questionsInfos = $checkQuestionExist->fetch();
         if ($questionsInfos['id_autheur'] == $_SESSION['id']){
#suppression de la publication
              $deletethisQestion= $base->prepare('DELETE FROM questions WHERE id = ?');
              $deletethisQestion->execute(array($idOftheQuestion));

              header('Location: ../../my-questions.php');


         } else{
            echo '<div class="alert alert-warning" role="alert container mt-5">Vous n\'avez pas le droit de supprimer cette question ';
         }
       
     }else{
        echo "Aucune publication trouvée";
     }

 }else{
    echo "Aucune publication trouvée";
 }