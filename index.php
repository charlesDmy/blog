<?php
require_once 'connexion.php';
session_start();


$ordre=$bdd->prepare("SELECT * FROM articles ORDER BY date_creation DESC ");
$ordre->execute();
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="BLOG">
    <title>BLOG</title>
    <style>
        img{
            width: 100px;
        }
    </style>
</head>
<body>
    <header>
        <h1>BLOG</h1>
        <a href="creation_compte_utilisateur.php">
            <button class="boutonInscription">S'inscrire</button>
        </a>
        <a href="connexion_compte.php">
            <button class="boutonConnexion">Connexion</button>
        </a>
        <?php if(isset($_SESSION['role'])) :?>
        <a href="deconnexionCompte.php">
            <button class="boutonDeconnexion">Deconnexion</button>
        </a>
        <?php endif ?>
    </header>
    <h2>Articles:</h2>
    <main>
        <?php foreach ($ordre as $article) : ?>
            <li>
                <a href="./detail_article.php?id=<?=$article['id'] ?>" ><?= $article['nom_article'] . '<br>' ; ?> <img <?='src="'. $article['photo'] . '" ' ?> alt="photo_blog"> <?= '<br>' . $article['date_modification'] .'<hr>'; ?></a>
            </li>
        <?php endforeach; ?>
    </main>
    <footer>
        <?php if(isset($_SESSION['role'])) :?>
            <a href="admin.php">ADMIN</a>
        <?php endif ?>
    </footer>
</body>
</html>