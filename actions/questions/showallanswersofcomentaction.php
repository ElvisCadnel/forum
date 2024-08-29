<?php

    require('actions/database.php');

    $getallanswers= $base->prepare("SELECT id_autheur, pseudo_auteur, id_question, commentaire,date_comment  FROM answers WHERE id_question = ? ORDER BY id DESC");
    $getallanswers->execute(array($idOfQuestion));