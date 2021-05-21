<!DOCTYPE html>
<html>
    <head>
        <title>Cours PHP / MySQL</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="cours.css">
    </head>
    <body>
        <h1>Bases de données MySQL</h1>
        tata 
        <?php
            $servername = '127.0.0.1:3308';
            $username = 'root';
            $password = '';
            $bd= "cours_mmi";
            
            //On établit la connexion
            $conn = new mysqli($servername, $username, $password, $bd);
            //$conn = new mysqli("127.0.0.1", "root", "root", "cours_mmi");
            //$conn = new mysqli("127.0.0.1:3308","root", "", "cours_mmi");
            //On vérifie la connexion
            if($conn->connect_error){
                die('Erreur : ' .$conn->connect_error);
            }
            echo 'Connexion réussie';
        ?>
    </body>
</html>