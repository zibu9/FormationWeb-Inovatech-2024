<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Traitement des données</title>
</head>
<body>
    <h1>Formulaire de Commentaire</h1>
    
    <form action="" method="post">
        <label for="name">Nom :</label>
        <input type="text" id="name" name="name">
        
        <label for="comment">Commentaire :</label>
        <textarea id="comment" name="comment"></textarea>
        
        <button type="submit">Envoyer</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Récupération des données soumises par le formulaire
        $name = $_POST['name'];
        $comment = $_POST['comment'];
        
        // Utilisation de strip_tags pour supprimer les balises HTML
        $name_without_tags = strip_tags($name);
        $comment_without_tags = strip_tags($comment);
        
        // Utilisation de htmlspecialchars pour échapper les caractères spéciaux HTML
        $safe_name = htmlspecialchars($name, ENT_QUOTES, 'UTF-8');
        $safe_comment = htmlspecialchars($comment, ENT_QUOTES, 'UTF-8');
        
        echo "<h2>Résultat après strip_tags :</h2>";
        echo "<p>Nom : $name_without_tags</p>";
        echo "<p>Commentaire : $comment_without_tags</p>";

        echo "<h2>Résultat après htmlspecialchars :</h2>";
        echo "<p>Nom : $safe_name</p>";
        echo "<p>Commentaire : $safe_comment</p>";
    }
    ?>
</body>
</html>
