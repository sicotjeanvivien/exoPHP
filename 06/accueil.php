<?php
include_once('classe.Auteur.php');
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>Accueil</title>
  </head>
  <body>
    <div>
    <?php
    try {
      $auteur = new Auteur('Olivier Heurtel');
      echo $auteur,'<br />';
      echo $auteur->format(),'<br />';
      echo $auteur->format(Auteur::PRENOM_ENTRE_PARENTHESES),'<br />';
      echo $auteur->format(Auteur::PRENOM_APRES_VIRGULE),'<br />';
      echo $auteur->format('?'),'<br />';
    } catch (Exception $e) {
      printf('<b>Erreur : %s.</b>',$e->getMessage());
    }
    ?>
    </div>
  </body>
</html>