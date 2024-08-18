<?php
    // On définit un cookie nommé "username" avec la valeur "JohnDoe" qui expire dans 30 jours
    setcookie("username", "JohnDoe", time() + (86400 * 30), "/"); // 86400 = 1 jour

    // Vérifiez si le cookie "username" est défini
    if (isset($_COOKIE["username"])) {
        echo "Bonjour " . htmlspecialchars($_COOKIE["username"]) . "!";
    } else {
        echo "Bonjour invité!";
    }
?>
