<?php
require_once 'connexion.php';

if(isset($_POST['nom'] , $_POST['prenom'] , $_POST['Email'] , $_POST['mdp'] , $_POST['role'])){
    $utilisateur=$bdd->prepare("INSERT INTO utilisateur(nom, prenom, Email, mdp, role) value(:nom, :prenom, :Email, :mdp, :role)");
    $utilisateur->bindValue(':nom' , $_POST['nom'], PDO::PARAM_STR);
    $utilisateur->bindValue(':prenom' , $_POST['prenom'], PDO::PARAM_STR);
    $utilisateur->bindValue(':Email' , $_POST['Email'], PDO::PARAM_STR);
    $utilisateur->bindValue(':mdp' , $_POST['mdp'], PDO::PARAM_STR);
    $utilisateur->bindValue(':role' , $_POST['role'], PDO::PARAM_STR);
    $utilisateur->execute();
    
    header('Location: index.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>creation compte</title>
</head>
<body>
<main>
    <h1>Création de compte utilisateur</h1>
        <form action="" method="post">
            <label for="">Nom*</label>
            <input type="text" name="nom" id="nom" required>

            <label for="">Prenom*</label>
            <input type="text" name="prenom" id="prenom" required>

            <label for="">E-mail*</label>
            <input type="email" name="Email" id="Email" required>

            <label for="">Mot de passe*</label>
            <input type="password" name="mdp" id="mdp" required>
            
            <label for="role">Role :</label>
                    <select name="role">
                        <option value="admin">admin</option>
                        <option value="utilisateur">utilisateur</option>
                    </select>

            <input type="submit" name="valider" value="Valider">
        </form>
    </main>
</body>
</html>