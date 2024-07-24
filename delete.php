<?php
require_once 'connexion.php';

$requete=$bdd->prepare('DELETE FROM articles where  id=:identifiant'); 
$requete->bindValue(':identifiant', $_GET['id'],PDO::PARAM_INT);
 $requete->execute();
 header('location: admin.php');
