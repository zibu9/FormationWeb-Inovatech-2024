<?php
    require_once('connection.php'); 
    $sql = "UPDATE articles 
    SET titre = :titre, description = :description 
    WHERE id = :id";

    // Préparation de la requête
    $stmt = $bdCon->prepare($sql);

    // Exécution de la requête avec les nouvelles données
    $stmt->execute([
        ':titre' => 'Recette de Poulet Rôti Modifiée 66',
        ':description' => 'Une version améliorée de la recette de poulet rôti. 66',
        ':id' => 6, // L'id de l'article à modifier
    ]);

    echo "Article mis à jour avec succès !";