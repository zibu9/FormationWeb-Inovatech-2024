<?php
    // Démarrer la session
    session_start();

    // Supprimer toutes les variables de session
    session_unset();

    // Détruire la session
    session_destroy();

    header('Location: login.php');
    exit;
?>
