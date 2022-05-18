<?php
include_once('commun.inc.php');
$numero = filter_input(INPUT_GET,'numero',FILTER_VALIDATE_INT); 
if (is_int($numero) and array_key_exists($numero,$auteurs)) {
  $auteur = $auteurs[$numero];
}
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>Auteur</title>
  </head>
  <body>
    <h1><?= isset($auteur)?$auteur:'Auteur introuvable' ?></h1>
    <p><a href="accueil.php">Retour à la liste</a></p>
  </body>
</html>