<?php
require_once 'connexion.php';
if(isset($_POST['valider'])) {
    $email=$_POST['email'];
    $mdp=$_POST['mdp'];

    $connexion=$bdd->prepare("SELECT * FROM utilisateur WHERE Email=:email AND mdp=:mdp");
    $connexion->bindParam(':email',$email, PDO::PARAM_STR);
    $connexion->bindParam(':mdp',$mdp, PDO::PARAM_STR);
    $connexion->execute();

    $utilisateur=$connexion->fetch();
    if($utilisateur) {
        session_start();
        $_SESSION['email']=$utilisateur['Email'];
        $_SESSION['role']=$utilisateur['role'];
    }
    header('location: index.php');
}    