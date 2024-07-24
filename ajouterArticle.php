<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ajouter article</title>
</head>
<body>
    <header>
        <a href="index.php">ACCUEIL</a>
    </header>
    <main>
        <h1>Ajout de l'article:</h1>
        <form action="confirmationAjoutArticle.php" method="post">
        <div>
                <label for=""> nom de l'article : </label>
                <input type="" name="nom_article" id="nom_article" required>
            </div>
            <br>
            <div>
                <label for=""> texte : </label>
                <textarea name="texte" id="texte" cols="30" rows="10"></textarea>
            </div>
            <br>                
            <div>
                <label for='url'>Photo</label>
                <input type="text" name="photo" id="photo">
            </div>
            <br>
            <div>
                 <input type="submit" value="Ajout Article">
            </div>
        </form>
    </main>
</body>
</html>