<?php

require('actions/database.php');
#verification de l'id de l'url
if(isset($_GET['id']) && !empty($_GET['id'])){
    #recuperer l'id et stocker dans une variable
    $idOfQuestion=$_GET['id'];
    
    #verifier si la question existe dans la base de données en utilisant une requete preparee et executee avec l'id de la question
    $checkIfQuestionExists = $base->prepare('SELECT * FROM questions WHERE id = ?');
   
    $checkIfQuestionExists->execute(array($idOfQuestion));
    
    if($checkIfQuestionExists->rowCount() > 0){
        
        #recuper les donnees de la base de donnees dans une var

        $questionsInfos = $checkIfQuestionExists->fetch();
        
        #stocker les donnees de la base de donnees
        $question_title = $questionsInfos['titre'];
        $question_contenu = $questionsInfos['contenu'];
        $question_id_auteur = $questionsInfos['id_autheur'];
        $question_pseudo_auteur = $questionsInfos['pseudo_auteur'];
        $question_publication_date = $questionsInfos['date_publication'];
        
    }else{
    $errormsg= '<div class=" alert alert-danger" role="alert"><p class="text-center m-0">Aucune publication trouvée</p></div>';
}

}else{
    $errormsg= '<div class=" alert alert-danger" role="alert"><p class="text-center m-0">Aucune publication trouvée</p></div>';

}