<?php
// upload_file.php

// Vérifiez si un fichier a été envoyé
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['file'])) {
    $file = $_FILES['file'];

    // Récupérez les informations sur le fichier
    var_dump($file);
    $fileName = $file['name'];
    $fileTmpName = $file['tmp_name'];
    $fileSize = $file['size'];
    $fileError = $file['error'];
    $fileType = $file['type'];

    // Définissez un répertoire de destination pour le fichier téléchargé
    $uploadDirectory = 'uploads/';

    // Vérifiez s'il y a eu une erreur lors de l'envoi du fichier
    if ($fileError === 0) {
        // Définissez un nom unique pour le fichier pour éviter les conflits
        $fileNewName = uniqid('', true) . "-" . basename($fileName);
        $fileDestination = $uploadDirectory . $fileNewName;

        // Déplacez le fichier depuis le répertoire temporaire vers le répertoire final
        if (move_uploaded_file($fileTmpName, $fileDestination)) {
            echo "Le fichier " . htmlspecialchars($fileName) . " a été téléchargé avec succès !";
        } else {
            echo "Erreur lors du téléchargement du fichier.";
        }
    } else {
        echo "Erreur lors de l'envoi du fichier : Code d'erreur $fileError";
    }
} else {
    echo "Aucun fichier n'a été téléchargé.";
}
?>
