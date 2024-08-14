<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = strip_tags($_POST['name']);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $message = strip_tags($_POST['message']);

    echo "Nom : " . $name . "<br>";
    echo "E-mail : " . $email . "<br>";
    echo "Message : " . $message . "<br>";
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire POST</title>
</head>
<body>
    <h1>Formulaire de contact</h1>
    <form action="" method="post">
        <label for="name">Nom :</label>
        <input type="text" id="name" name="name">
        
        <label for="email">E-mail :</label>
        <input type="email" id="email" name="email">
        
        <label for="message">Message :</label>
        <textarea id="message" name="message"></textarea>
        
        <button type="submit">Envoyer</button>
    </form>
</body>
</html>
