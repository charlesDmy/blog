<?php
require_once 'connexion.php';

if(isset($_POST['valider'])) {
    $email=$_POST['Email'];
    $mdp=$_POST['mdp'];

    $connexion=$bdd->prepare("SELECT * FROM utilisateur WHERE Email=$email AND mdp=$mdp");
    $connexion->execute();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>connexion comptet</title>
</head>
<body>
    <main> 
        <h2>Connexion compte utilisateur</h2>
            <form action="" method="post">
                <label for="">E-mail*</label>
                <input type="email" name="email" id="email" required>

                <label for="">Mot de passe*</label>
                <input type="password" name="mot_de_passe" id="mot_de_passe" required>

            <input type="submit" name="valider" value="Valider">
        </form>
    </main>
</body>
</html>