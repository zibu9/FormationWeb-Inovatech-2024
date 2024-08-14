<?php
// Définissez le mot de passe correct
$correctPassword = '12345678';

// Vérifiez si le formulaire a été soumis
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupérez le mot de passe soumis
    $submittedPassword = $_POST['password'];

    // Vérifiez si le mot de passe est correct
    if ($submittedPassword === $correctPassword) {
        // Affichez le contenu protégé
        echo "<h1>Bienvenue sur la page protégée !</h1>";
        echo "<p>Vous avez accès à ce contenu sécurisé.</p>";
    } else {
        // Affichez un message d'erreur
        echo "<h1>Mot de passe incorrect</h1>";
        echo "<p>Le mot de passe que vous avez entré est incorrect. <a href='login.php'>Réessayez</a>.</p>";
    }
} else {
    // Redirigez vers la page de connexion si aucune donnée n'a été soumise
    header('Location: login.php');
    exit();
}
?>

<?php
    // Crée un cookie qui expire dans 1 heure
    setcookie('username', 'JohnDoe', time() + 3600);

    // Accède au cookie
    if(isset($_COOKIE['username'])) {
        echo 'Bonjour ' . $_COOKIE['username'] . '!';
    } else {
        echo 'Cookie non défini.';
    }

    // Supprime le cookie en définissant une date d'expiration passée
    // setcookie('username', '', time() - 3600);
?>



