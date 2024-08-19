<?php
    require_once('connection.php');
    $articlesStmt = $bdCon->prepare('SELECT * FROM articles');
    $articlesStmt->execute();
    $articles = $articlesStmt->fetchAll();
    foreach ($articles as $row) {
        echo '<h1>' . $row['titre'] . '</h1>';
    }
?>