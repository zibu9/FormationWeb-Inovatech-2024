<?php
require_once('connection.php');
$sql = "DELETE FROM articles WHERE id > :id";

// Préparation de la requête
$stmt = $bdCon->prepare($sql);

// Exécution de la requête pour supprimer l'article avec l'id spécifié
$stmt->execute([':id' => 3]);

echo "Article supprimé avec succès !";