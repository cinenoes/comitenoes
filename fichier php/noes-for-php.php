<!DOCTYPE html>
<html>
    <head>
        <title>Cours PHP / MySQL</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="cours.css">
    </head>
    <body>
         
        <?php
            $servername = 'localhost';
            $username = 'root';
            $password = 'root';
            $dbname = 'noes_db';
            
            /*try{*/
                $dbco = new PDO("mysql:host=$servername:dbname=cours_mmi", $username, $password);
                var_dump($dbco);
                /*$dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                
                $sql = "CREATE DATABASE".noes_db;
                $dbco->exec($sql);
                
                echo 'Base de données créée bien créée !';
            }
            
            catch(PDOException $e){
              echo "Erreur : " . $e->getMessage();
            }*/
        ?>
        <h1>Bases de données MySQL</h1> 
    </body>
</html>