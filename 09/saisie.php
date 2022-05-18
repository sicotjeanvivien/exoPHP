<?php
// Tester si le script est appelé en traitement du formulaire. 
if (isset($_POST['ok'])) { // oui 
  // Récupérer les valeurs saisies dans le formulaire. 
  $prenom = $_POST['prenom']; 
  $nom = $_POST['nom']; 
  $auteur = "$prenom $nom";
} 
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>Saisie</title>
    <style>
    label { display: block; width: 60px; float: left; }
    </style>
  </head>
  <body>
    <!-- Formulaire de saisie de l'auteur. --> 
    <form action="saisie.php" method="post"> 
    <div> 
      <b>Prénom et nom du nouvel auteur :</b> 
      <br /><label>Prénom</label>  
      <input type="text" name="prenom" size="40" maxlength="40" autofocus="autofocus" /> 
      <br /><label>Nom</label>
      <input type="text" name="nom" size="40" maxlength="40" /> 
      <br /> 
      <input type="submit" name="ok" value="Enregistrer" /> 
    </div> 
    </form> 
    <div><?= (isset($auteur))?$auteur:'' ?></div>
  </body>
</html>