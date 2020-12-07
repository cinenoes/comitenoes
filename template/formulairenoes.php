<!DOCTYPE html>
<?php
echo '<h1>Comité de Noès</h1>';
?>
<html>
  <head>
    <title>Cours PHP & MySQL</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="formulaire-for-php.css">
  </head>
  <body>
    <h1>Ciné Noès</h1>
    	<h2>Année 2020</h2>



<h1>Formulaire de pré-inscription</h1>
        
        <form action="formulaire2-for-php.php" method="post">
            <div class="c100">
                <label for="prenom">Prénom : </label>
                <input type="text" id="prenom" name="prenom">
            </div>
            <div class="c100">
                <label for="nom">Nom : </label>
                <input type="text" id="nom" name="nom">
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
                <input type="radio" id="feminin" name="sexe" value="feminin">
                <label for="feminin">Féminin</label>
                <input type="radio" id="masculin" name="sexe" value="masculin">
                <label for="masculin">Masculin</label>
            </div>
            <div class="c100">
                <label for="adresse">Adresse : </label>
                <input type="text" id="adresse" name="adresse">
            </div>
           <div class="c100">
                <label for="ville">Ville : </label>
                <input type="text" id="ville" name="ville">
            </div>
            <div class="c100" id="submit">
                <input type="submit" value="Envoyer">
            </div>
        </form>
 	
  </body>
</html>