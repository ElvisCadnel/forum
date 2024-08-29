<?php
require ('actions/database.php');


if (isset($_POST['validate'])){
    #verification si les champs sont bien remplis
   if (!empty($_POST['title']) && !empty($_POST['description']) && !empty($_POST['content'])){
     #recuperation des infos de l'users   
    $question_title = htmlspecialchars($_POST['title']);
    $question_desciption = nl2br(htmlspecialchars($_POST['description']));
    $question_content = nl2br(htmlspecialchars($_POST['content']));
    $question_date = date('l H:i d/m/Y');
    $question_id_author = $_SESSION['id'];
    $question_pseudo_author = $_SESSION['nom'];
      #insertion des donnees dans la bd
    $insertQuestion = $base->prepare("INSERT INTO questions (titre, description, contenu, id_autheur, pseudo_auteur, date_publication) VALUES (?, ?, ?, ?, ?, ?)");
    $insertQuestion->execute(
        array(
            $question_title,
            $question_desciption, 
            $question_content,
            $question_id_author,
            $question_pseudo_author,
            $question_date
        )
    );
    
    $succesmsg = "Votre question a bien été publiée";

   }else{
    $errormsg = "Veuillez remplir tous les champs";
   }

}
