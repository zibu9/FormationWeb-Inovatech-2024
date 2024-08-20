<?php
require_once('connection.php');
$sql = "INSERT INTO articles (titre, description, image_lien, active, creation_date) 
        VALUES (:titre, :description, :image_lien, :active, NOW())";
// Préparation de la requête
$stmt = $bdCon->prepare($sql);

// Exécution de la requête avec les données
$stmt->execute([
    ':titre' => 'Recette de Poulet Rôti 56',
    ':description' => 'Une délicieuse recette de poulet rôti croustillant. 56',
    ':image_lien' => 'img/poulet_roti56.jpg',
    ':active' => 1 // 1 = true, 0 = false,
]);

echo "Nouvel article ajouté avec succès !";