<?php
include_once('commun.inc.php');
$numero = filter_input(INPUT_GET,'numero',FILTER_VALIDATE_INT); 
if (is_int($numero) and array_key_exists($numero,$auteurs)) {
  $auteur = $auteurs[$numero];
  // Ouvrir la session.
  session_start();
  // Mémoriser le timestamp UNIX de dernière visite de l'auteur.
  $_SESSION['visites'][$numero] = time();
  // Trier le tableau des auteurs visités en ordre décroissant, 
  // en préservant les clés.
  arsort($_SESSION['visites']);
  // Trier les trois premiers éléments du tableau des auteurs visités, 
  // en préservant les clés.
  $_SESSION['visites'] = array_slice($_SESSION['visites'],0,3,TRUE);
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