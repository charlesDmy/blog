<?php
require_once 'connexion.php';

$id= $_GET['id'];
$requeteID=$bdd->prepare("SELECT * FROM articles WHERE id=:id");
$requeteID->bindValue(':id',$id,PDO::PARAM_INT);
$requeteID->execute();

$reponse=$requeteID->fetch(PDO::FETCH_ASSOC);
//var_dump($reponse) permet d'afficher le tableau de $reponse
//var_dump($reponse);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin detail article</title>
</head>
<body>
    <header>
        <nav>
            <a href="admin.php">
                 <button class="admin">ADMIN</button>
            </a>
           
        </nav>
    </header>
    <main>
        <?= $reponse['nom_article'] . '<br>' . $reponse['texte'] . '<br>' ;?> <img src="<?=$reponse['photo'];?>"/> <?= '<br> '. $reponse['date_creation'] ;?>
    </main>
</body>
</html>