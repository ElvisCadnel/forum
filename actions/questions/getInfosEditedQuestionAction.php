<?php
require('actions/database.php');


#verifier si l'id dela question est bien passer en parramètre de l'url
if (isset($_GET['id']) AND !empty($_GET['id'])){
   
   $idOfQuestion = $_GET['id'];
#verifier si la question exist 
   $checkQuestionsExists  = $base->prepare('SELECT * FROM questions WHERE id = ?');
  
   $checkQuestionsExists->execute(array($idOfQuestion));
   
   if ($checkQuestionsExists->rowCount() > 0){
       #Récuperer les donnees de la publication
        $questionInfos = $checkQuestionsExists->fetch();
        if ($questionInfos['id_autheur'] == $_SESSION['id']){
             
              $question_title = $questionInfos['titre'];
              $question_desciption = $questionInfos['description'];
              $question_content = $questionInfos['contenu'];
              
              $question_desciption = str_replace('<br />', '', $question_desciption);
              $question_content = str_replace('<br />', '', $question_content);
              

        }else{
           $errormsg = 'Vous n\'êtes pas l\'auteur de cette publication';
        }

   }else{
      $errormsg = 'Aucune publication n\'a été trouvée';
   }

}else{
    $errormsg = 'Aucune publication n\'a été trouvée';
}