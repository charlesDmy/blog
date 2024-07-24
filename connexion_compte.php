<?php
require_once 'connexion.php';


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>connexion compte</title>
</head>
<body>
    <main> 
        <h2>Connexion compte utilisateur</h2>
            <form action="validationConnexionCompte.php" method="post">
                <label for="">E-mail*</label>
                <input type="email" name="email" id="email" required>

                <label for="">Mot de passe*</label>
                <input type="password" name="mdp" id="mdp" required>

            <input type="submit" name="valider" value="Valider">
        </form>
    </main>
</body>
</html>