<?php
$connexion= require_once 'connexion.php';

$id= $_GET['id'];
$requeteID=$bdd->prepare("SELECT * FROM articles WHERE id=:id");
$requeteID->bindValue(':id',$id,PDO::PARAM_INT);
$requeteID->execute();

$article=$requeteID->fetch(PDO::FETCH_ASSOC);


?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>modification article</title>
</head>
<body>
<main>
    <!-- pour envoyer une donnée en GET -->
        <form action="validationModificationArticle.php?id=<?=$article['id']; ?>" method="post">
            <div>
                <label for=""> nom de l'article : </label>
                <input type="" name="nom_article" id="nom_article" value="<?= $article['nom_article']; ?>" required>
            </div>
            <br>
            <div>
                <label for=""> texte : </label>
                <textarea name="texte" id="texte" cols="30" rows="10"><?= $article['texte'] ;?></textarea>
            </div>
            <br>                
            <div>
                <label for='url'>Photo</label>
                <input type="text" name="photo" id="photo" value="<?= $article['photo']; ?>">
            </div>
            <br>
            <div>
                <input type="hidden" value="<?= $id;?>" name='id'>
            </div>
            <div>
                 <input type="submit" value="Modifier Article">
            </div>
           
        </form>
    </main>
</body>
</html>