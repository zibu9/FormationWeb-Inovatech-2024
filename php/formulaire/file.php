<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Envoi de Fichier</title>
</head>
<body>
    <h1>Formulaire d'Envoi de Fichier</h1>

    <form action="upload_file.php" method="post" enctype="multipart/form-data">
        <label for="file">Choisissez un fichier :</label>
        <input type="file" id="file" name="file">
        <button type="submit">Envoyer</button>
    </form>
</body>
</html>
