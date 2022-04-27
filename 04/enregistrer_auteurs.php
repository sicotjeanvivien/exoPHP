<?php
include_once('commun.inc.php');
// Enregistrer les auteurs dans un fichier.
$f = fopen('auteurs.txt','wb');  
foreach ($auteurs as $auteur) {
  fwrite($f, $auteur . PHP_EOL);  
}
fclose($f);  
header('location: accueil.php');
?>