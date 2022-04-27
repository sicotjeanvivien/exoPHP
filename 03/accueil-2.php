<?php
include_once('commun.inc.php');
$nom = 'Olivier';
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>Accueil</title>
    <style>
    table { border-collapse: collapse; }
    table, td, th { border: 1px solid black; }
    td, th { padding: 4px; }
    </style>
  </head>
  <body>
    <div>
    <?php
    // Afficher les messages
    echo "Bonjour $nom.<br />";
    echo 'Bienvenue sur ',NOM_SITE,'.<br />';
    // Afficher la date en français.
    setlocale(LC_ALL,'fr_FR'); 
    echo 'Nous sommes le ',strftime('%A %d %B %Y'),'.<br />';  
    // Compter le nombre de lettres du nom.
    echo 'Votre nom comporte ',strlen($nom),' lettres.<br />';
    // Déterminer si le nom commence par une voyelle ou une consonne.
    $voyelles = ['A','E','I','O','U','Y'];
    if (in_array(strtoupper($nom[0]),$voyelles)) {
      echo 'Votre nom commence par une voyelle.<br />';
    } else {
      echo 'Votre nom commence par une consonne.<br />';
    }
    // Compter le nombre de voyelles du nom.
    $nombre_voyelles = preg_match_all('/[AEIOUY]/i',$nom);
    echo "Votre nom comporte $nombre_voyelles voyelles.<br />";
    ?>
    <!-- Afficher le tableau des auteurs. -->
    <table>
    <tr><th>Auteurs</th></tr>
    <?php
    foreach ($auteurs as $auteur) {
      echo "<tr><td>$auteur</td></tr>";
    }
    ?>
    </table>
    </div>
  </body>
</html>