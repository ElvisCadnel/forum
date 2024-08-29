<?php
  
  require('actions/database.php');

  if(isset($_POST['validate'])){
    
    if(!empty($_POST['textarea'])){
          $comment_date = date('l H:i d/m');
          $user_answer = nl2br(htmlspecialchars($_POST['textarea'])); 
         
          $addCommentaire = $base->prepare('INSERT INTO answers(pseudo_auteur, id_autheur, id_question, commentaire,date_comment) VALUES (?,?,?,?,?)');
          $addCommentaire->execute(array($_SESSION['nom'], $_SESSION['id'], $idOfQuestion, $user_answer, $comment_date));
      
    }

  }