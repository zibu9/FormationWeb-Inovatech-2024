<?php
    if (isset($_GET['query'])) {
        $query = htmlspecialchars($_GET['query']); // Échapper les caractères spéciaux
        echo "Vous avez recherché : " . $query;
    }
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire GET</title>
</head>
<body>
    <h1>Recherche</h1>
    <form action="search.php" method="get">
        <label for="query">Recherche :</label>
        <input type="text" id="query" name="query">
        <button type="submit">Rechercher</button>
    </form>
</body>
</html>
