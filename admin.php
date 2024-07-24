<?php
require_once 'connexion.php';

$ordre=$bdd->prepare("SELECT * FROM articles ORDER BY date_creation DESC ");
$ordre->execute();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin</title>
    <style>
        img{
            width: 100px;
        }
    </style>
</head>
<body>
    <header>
        <a href="index.php">ACCUEIL</a>
        <a href="ajouterArticle.php">
            <button class="boutonAjoutArticle">Ajout d'article</button>
        </a> 
    </header>
    <main>
        <h1>Articles:</h1>
        <ul>
            <?php foreach ($ordre as $article) : ?>
                <li>
                    <a href="./adminDetailArticle.php?id=<?=$article['id'] ?>" ><?= $article['nom_article'] . '<br>' ; ?> <img <?='src="'. $article['photo'] . '" ' ?> alt="photo_blog"> <?= '<br>' . $article['date_modification'] .'<br>'; ?></a>
                    <a href="delete.php?id=<?= $article['id'] ; ?>">suprimer article</a> <br>
                    <a href="modificationArticle.php?id=<?= $article['id'] ; ?>">modifier article</a> <hr>
                </li>
            <?php endforeach; ?>
        </ul>
    </main>
</body>
</html>