<?php
$users='root';
$pass= "";
try{
$base= new PDO('mysql:host=localhost;dbname=forum;charset=utf8',$users,$pass);
}catch(Exception $e){
    die('Erreur de connexion à la base de données.'.$e->getMessage());
 
}