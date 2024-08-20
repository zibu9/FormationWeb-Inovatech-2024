<?php
require_once('connection.php');
$sql = 'SELECT * FROM articles WHERE id = ? AND active = ?';

$articlesStatement = $bdCon->prepare($sql);
$articlesStatement->execute([1, true]);
$articles = $articlesStatement->fetchAll();
debug($articles);