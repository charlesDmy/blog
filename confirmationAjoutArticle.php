<?php
$connexion = require_once 'connexion.php';

if(empty($_POST)){
    echo 'le formulaire n\'a pas été soumis correctement';
    exit();
} else {
    $requete=$bdd->prepare('INSERT INTO articles( nom_article, texte, photo) value( "'.$_POST['nom_article'] .'", "'.$_POST['texte'] .'" , "'.$_POST['url'] .'")'); 
    $requete->execute();
    header('location: admin.php');
    
}
