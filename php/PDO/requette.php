<?php
    require_once('connection.php');
    $sql = 'SELECT * FROM articles';
    $articlesStmt = $bdCon->prepare($sql);
    $articlesStmt->execute();
    $articles = $articlesStmt->fetchAll();
    debug($articles);
?>