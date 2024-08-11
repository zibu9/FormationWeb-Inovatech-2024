<?php
    // Validation et assainissement de l'ID
    $id = isset($_GET['id']) ? intval($_GET['id']) : 0;

    if ($id > 0) {
        echo "ID valide : " . $id;
    } else {
        echo "ID invalide.";
    }
?>

