<?php
require_once 'connexion.php';
$id=$_POST['id'];
$nom_article= $_POST['nom_article'];
$texte= $_POST['texte'];
$photo= $_POST['photo'];
// print_r($_POST);

$modification=$bdd->prepare("UPDATE articles SET nom_article=:nom_article,texte=:texte,photo=:photo WHERE id =:id");
$modification->bindParam(':nom_article',$nom_article, PDO::PARAM_STR);
$modification->bindParam(':texte',$texte, PDO::PARAM_STR);
$modification->bindParam(':photo',$photo, PDO::PARAM_STR);
$modification->bindParam(':id',$id, PDO::PARAM_INT);
$modification->execute();

header('location: admin.php');