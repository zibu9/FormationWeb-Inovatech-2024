<?php
// 1. Vérifier si un fichier a été envoyé
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['file'])) {
    $file = $_FILES['file'];

    // Récupérer les informations sur le fichier
    $fileName = $file['name'];
    $fileTmpName = $file['tmp_name'];
    $fileSize = $file['size'];
    $fileError = $file['error'];
    $fileType = $file['type'];

    // Définir un répertoire de destination pour le fichier téléchargé
    $uploadDirectory = 'uploads/';

    // 2. Vérifier la taille du fichier (limite à 2 Mo)
    $fileSizeLimit = 2 * 1024 * 1024; // 2 Mo en octets
    if ($fileSize > $fileSizeLimit) {
        echo "Le fichier est trop volumineux. La taille maximale autorisée est de 2 Mo.";
        exit();
    }

    // 3. Vérifier l'extension du fichier
    $allowedExtensions = ['jpg', 'jpeg', 'png', 'gif'];
    $fileExtension = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
    if (!in_array($fileExtension, $allowedExtensions)) {
        echo "Type de fichier non autorisé. Seules les images (jpg, jpeg, png, gif) sont acceptées.";
        exit();
    }

    // 4. Vérifier si le dossier pour stocker les fichiers existe, sinon le créer
    if (!is_dir($uploadDirectory)) {
        mkdir($uploadDirectory, 0755, true);
    }

    // 5. Valider l'upload du fichier
    if ($fileError === 0) {
        // Définir un nom unique pour le fichier pour éviter les conflits
        $fileNewName = uniqid('', true) . "-" . basename($fileName);
        $fileDestination = $uploadDirectory . $fileNewName;

        // Déplacer le fichier depuis le répertoire temporaire vers le répertoire final
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
