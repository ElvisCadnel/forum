<?php

require ('actions/database.php');
$getAllQestions = $base->prepare("SELECT id,titre,description,pseudo_auteur,date_publication FROM questions WHERE id_autheur = ? ORDER BY id DESC");
$getAllQestions->execute(array($_SESSION['id']));


