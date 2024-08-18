<?php
// Démarrer la session
session_start();

// Vérifiez si l'utilisateur est connecté
if (!isset($_SESSION['user'])) {
    header('Location: sessions/login.php');
    exit;
}

$user = $_SESSION['user'];
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Page protégée</title>
</head>
<body>
    <h1>Bienvenue, <?= htmlspecialchars($user) ?> !</h1>
    <p>Ceci est une page protégée. Seuls les utilisateurs connectés peuvent la voir.</p>
    <a href="logout.php">Se déconnecter</a>
</body>
</html>
