<?php
    if (isset($_GET['query'])) {
        $query = htmlspecialchars($_GET['query']); // Échapper les caractères spéciaux
        echo "Vous avez recherché : " . $query;
    }
?>

