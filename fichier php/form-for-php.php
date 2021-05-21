<!DOCTYPE html>
<html>
    <head>
        <title>Cours PHP / MySQL</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="cours.css">
    </head>
    <body>
        <h1>Bases de données MySQL</h1>
<?php

    $serveur = "localhost";
    $dbname = "cours_mmi";
    $user = "root";
    $pass = "root";
    /*
    try{
        //On se connecte à la BDD
        $dbco = new PDO("mysql:host=$serveur;dbname=$dbname",$user,$pass);
        $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
        //On crée une table form
        $form = "CREATE TABLE form(
            id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            prenom TEXT,
            mail TEXT,
            age INT,
            sexe TEXT,
            pays TEXT)";
        $dbco->exec($form);
    }
    catch(PDOException $e){
        echo 'Erreur : '.$e->getMessage();
    }*/
    ?>
    </body>
</html>
