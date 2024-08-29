<?php
  require('actions/database.php');

  if(isset($_POST['validate'])){
#verifications des champs
     if(!empty($_POST['title']) && !empty($_POST['description']) && !empty($_POST['content'])){
#nouvelle donnees 
       $new_question_title = htmlspecialchars($_POST['title']);
       $new_question_description = htmlspecialchars($_POST['description']);
       $new_question_content = htmlspecialchars($_POST['content']);
#update 
       $editQuestion = $base->prepare("UPDATE questions SET titre = ?,description = ?,contenu= ? WHERE id= ?");
       $editQuestion->execute(array($new_question_title,$new_question_description,$new_question_content,$idOfQuestion));
#redirection
       header('Location: my-questions.php');
  }else{
    $errormsg = "Veuillez remplir tous les champs";
  }
}