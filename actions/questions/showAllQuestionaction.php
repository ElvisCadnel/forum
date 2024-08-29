<?php
require('actions/database.php');
#recuperer des publications par defaut
$getAllQuestions= $base->query("SELECT id, id_autheur, pseudo_auteur, titre, description, date_publication FROM questions ORDER BY id DESC LIMIT 10");
#verifier si une recherche est a ete rentrer par l'user

if (isset($_GET["search"]) && !empty($_GET["search"])) {
 #la recherche
    $usersSearch = $_GET['search'];
#recuperer les donnees rechercher
    $getAllQuestions= $base->query('SELECT id, id_autheur, pseudo_auteur, titre, description, date_publication FROM questions WHERE titre LIKE "%'.$usersSearch.'%" ORDER BY id DESC ');
 

}