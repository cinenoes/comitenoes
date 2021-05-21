<!DOCTYPE html>
<?php
echo 'hello world 2 !';
?>
<html>
  <head>
    <title>Cours PHP & MySQL</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="formulaire-for-php.css">
  </head>
  <body>
    <h1>Titre principal</h1>
    	<h2>Titre secondaire</h2>
    <?php
     //Affiche "Hello World" avec un retour à la ligne
            echo 'Hello World <br>'; //Ceci est un commentaire PHP et <br> un suat de ligne
            
            /*Affiche
              "Bonjour le Monde
            */
            echo "Bonjour le Monde"; /*Ceci est un commentaire PHP*/
    ?>
    <?php
    echo "<h2>Première instruction PHP avec echo</h2>";
            echo 'Bonjour à tous !<br>';
            echo  29,"<br>";
            echo "<br>J'ai ", 29, " ans.<br>";
            print "<h2>Première instruction PHP avec print</h2>";
            print 'Bonjour à tous !<br>';
            print  '29<br>';
    echo 'Je m\'appelle Florian mais tout le monde m\'appelle "Flo"<br>';
    $prenom = "jacques";
    print "$prenom<br>";
    $nom = "lapergue";
    print "$nom<br>";
    $age = 58;
    print "$age<br>";
    ?>
	
    <?php
            $prez = "Je m'appelle Pierre";
            $age = 28; //Stocke le nombre 28
            $age2 = "28"; //Stocke la chaine de caractères "28"
            
            echo "La variable \$age contient une valeur de type ";
            echo gettype($age); //Renoie le type de variable
            
            echo "<br>La variable \$age2 contient une valeur de type ";
            echo gettype($age2);
            echo "<br>";
            echo "je m'appelle $prenom et j'ai $age ans<br>";
            $prez2 = "Je suis " .$prenom. " " .$nom. ", j'ai " .$age. " ans"; //Concaténation de de variable et texte à l'aide du point
            echo $prez2; //Impression du résultat de la concaténation
            $a = "Bonjour";
            $a .= " le monde"; //$a stocke "Bonjour le monde" ; concaténation à l'aide de .=
            echo '$a stocke : ' .$a. '<br>';
            
            $x = 5;
            $x -= 3; //$x stocke désormais 2; opération 5-3 à l'aide de -=
            echo '$x stocke : ' .$x. '<br>';
            
            $y = 3;
            $y **= $x; //$y stocke 3^2 = 3 * 3 = 9
            echo '$y stocke : ' .$y;
            /*comparaison de valeur*/
            $x = 4; //On affecte la valeur 4 à $x
            
            /*On compare la valeur contenue dans $x à 4 en valeur.
             *On renvoie le résultat de la comparaison grâce à var_dump()*/
            var_dump($x == 4);
            echo '<br>';
            
            var_dump($x > 7);
            echo '<br>';
            
            /*On compare la valeur de $x à la chaine de caractères "4" en
             *valeur simplement*/
            var_dump($x == "4");
            echo '<br>';
            
            /*On compare la valeur de $x à la chaine de caractères "4" en
             *termes de valeur et de type*/
            var_dump($x === "4");
            echo '<br>';
            
            var_dump($x != "4");
            echo '<br>';
            
            var_dump($x !== "4");
            echo '<br>';
        ?>
        <?php
            $x = 4; //On affecte la valeur 4 à $x
            $y = 2; //On affecte la valeur 2 à $y
            
            if($x > 1){
                echo '$x contient une valeur supérieure à 1 <br>';
            }
            
            if($x == $y){
                echo '$x et $y contiennent la même valeur <br>';
            }
        ?> 
        <?php
            $x = 4; //On affecte la valeur 4 à $x
            $y = 6; //On affecte la valeur -12 à $y
            
            if(!$x >= 0 AND !$y >= 0){
                echo 'Ce texte est toujours affiché !<br>'; //les valeurs booléennes de x et y sont différentes de O
            }
            
            if(!($x >= 0) AND !($y >= 0)){
                echo 'Ce texte s\'affiche uniquement si $x et $y contiennent
                toutes les deux une valeur stric. négative <br>'; // on évalue le ANd de l'inverse des comparaisons
            }
            
             if(!($x >= 0 AND $y >= 0)){
                echo 'Soit $x contient une valeur stric. négative, soit $y
                contient une valeur stric. négative, soit les deux variables
                contiennent une valeur stric. négative'; //on évalue l'inverse du AND des 2 comparaison
            }
        ?>   
        <?php
            $x = 4; //On affecte la valeur 4 à $x
            
            //Ecrire ceci :
            if($x >= 0){
                echo '$x stocke un nombre positif<br>';
            }else{
                echo '$x stocke un nombre négatif<br>';
            }
            
            //Est equivalent à cela :
            echo $x >= 0 ? '$x stocke un nb positif' : '$x stocke un nb négatif';
            echo '<br><br>' 
        ?>  
        <?php
            $x = 4; //On affecte la valeur 4 à $x
            $y = NULL;
            $z;
            
            $resultatx = $x ?? 'NULL'; //si variable booléenne = 0 --> devient "null"; sinon devient égale à x
            $resultaty = $y ?? 'NULL';
            $resultatz = $z ?? 'NULL';
            
            echo '$x contient ' .$resultatx. '<br>
                  $y contient ' .$resultaty. '<br>
                  $z contient ' .$resultatz;
            echo  '<br><br>';
        ?>
        <?php
            $x = 5; 
            
            switch($x){
                case 0:
                    echo '$x stocke la valeur 0';
                    break;
                case 1:
                    echo '$x stocke la valeur 1';
                    break;
                case 2:
                    echo '$x stocke la valeur 2';
                    break;
                case 3:
                    echo '$x stocke la valeur 3';
                    break;
                case 4:
                    echo '$x stocke la valeur 4';
                    break;
                default:
                    echo '$x ne stocke pas de valeur entre 0 et 4';
            }
            echo '<br><br>'
        ?>
        <?php
            $x = 2; $y = 2; $a = 2; $b = 2;
            
            echo 'Post incrémentation pour $x : ' .$x++. '<br>'; //incrémentation affectée à la valeur après son affichage
            echo '$x contient maintenant : ' .$x. '<br>';
            
            echo 'Pré incrémentation pour $y : ' .++$y. '<br>'; //incrémentation affectée à la valeur avant son affichage
            echo '$y contient maintenant : ' .$y. '<br>';
            
            echo 'Post décrémentation pour $a : ' .$a--. '<br>';
            echo '$a contient maintenant : ' .$a. '<br>';
            
            echo 'Pré décrémentation pour $b : ' .--$b. '<br>';
            echo '$b contient maintenant : ' .$b. '<br>';
            echo '<br>'
        ?>

       <?php
            $x = 0;
            
            while($x <= 10){
                echo '$x contient la valeur ' .$x. '<br>'; //tant que x <= o, on affiche x+1 (affiche de à à 10)
                $x++;
            }
        ?>
        <?php
            $x = 0;
            $y = 20;
            
            do{
                echo '$x contient la valeur ' .$x. '<br>';
                $x++;
            }while($x <= 5);
            
            do{
                echo '$y contient la valeur ' .$y. '<br>';
                $y++;
            }while($y <= 5);
        ?>
        <?php
            for($x = 0; $x <= 5; $x++){    
                echo '$x contient la valeur ' .$x. '<br>';
            }
            echo '<br>'
        ?>
        <?php
            echo '<h2>Menu inclus avec include</h2> <br>';
            include 'menu.php';
            include 'menu.php';
        
            echo '<h2>Menu inclus avec include_once</h2> <br>'; //utilise menu.php que si c'est la première fois
            include_once 'menu.php';
            
            echo '<h2>Menu inclus avec require</h2> <br>';
            require 'menu.php';
            require 'menu.php';
            
            echo '<h2>Menu inclus avec require_once</h2> <br>';
            require_once 'menu.php';
        ?>
        <?php
            $prenom = 'Pierre';
            $x = 4;
            $y = 5;
            $z = 10;
            
            function bonjour($p){
                echo 'Bonjour ' .$p. '<br>';
            } //Créer une fonction php --> ici echo bonjour + variable $p
            
            function addition($p1, $p2){
                echo $p1. ' + ' .$p2. ' = ' .($p1 + $p2). '<br>';
            }
            
            bonjour($prenom); // utilise la fonction bonjour et remplace la variable $P par la variable $prenom
            bonjour('Mathilde'); // utilise la fonction bonjour et remplace la variable $P par la donnée 'mathilde'
            addition($x, $y);
            addition(1, 1);
        ?>
    <p>Un paragraphe</p>

<h1>Formulaire HTML</h1>
        
        <form action="formulaire2-for-php.php" method="post">
            <div class="c100">
                <label for="prenom">Prénom : </label>
                <input type="text" id="prenom" name="prenom">
            </div>
            <div class="c100">
                <label for="mail">Email : </label>
                <input type="email" id="mail" name="mail">
            </div>
            <div class="c100">
                <label for="age">Age : </label>
                <input type="number" id="age" name="age">
            </div>
            <div class="c100">
                <input type="radio" id="femme" name="sexe" value="femme">
                <label for="femme">Femme</label>
                <input type="radio" id="homme" name="sexe" value="homme">
                <label for="homme">Homme</label>
                <input type="radio" id="autre" name="sexe" value="autre">
                <label for="autre">Autre</label>
            </div>
            <div class="c100">
                <label for="pays">Pays de résidence :</label>
                <select id="pays" name="pays">
                    <optgroup label="Europe">
                        <option value="france">France</option>
                        <option value="belgique">Belgique</option>
                        <option value="suisse">Suisse</option>
                    </optgroup>
                    <optgroup label="Afrique">
                        <option value="algerie">Algérie</option>
                        <option value="tunisie">Tunisie</option>
                        <option value="maroc">Maroc</option>
                        <option value="madagascar">Madagascar</option>
                        <option value="benin">Bénin</option>
                        <option value="togo">Togo</option>
                    </optgroup>
                    <optgroup label="Amerique">
                        <option value="canada">Canada</option>
                    </optgroup>
                </select>
            </div>
            <div class="c100" id="submit">
                <input type="submit" value="Envoyer">
            </div>
        </form>
 	
  </body>
</html>