<?php
require_once 'connexion.php';


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
    </header>
    <h2>Articles:</h2>
    <main>
        <?php foreach ($ordre as $article) : ?>
            <li>
                <a href="./detail_article.php?id=<?=$article['id'] ?>" ><?= $article['nom_article'] . '<br>' ; ?> <img <?='src="'. $article['photo'] . '" ' ?> alt="photo_blog"> <?= '<br>' . $article['date_creation'] .'<hr>'; ?></a>
            </li>
        <?php endforeach; ?>
    </main>
    <footer>
        <a href="admin.php">ADMIN</a>
    </footer>
</body>
</html>