<?php
    function debug($var){
        echo "<pre>";
        print_r($var);
        echo "</pre>";
    }

    try
    {
        $bdCon = new PDO('mysql:host=localhost;dbname=blog;charset=utf8', 'root', '');
    }
    catch (Exception $e)
    {
        die('Erreur : ' . $e->getMessage());
    }
    
?>