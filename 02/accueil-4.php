<?php
const NOM_SITE = 'monSite.com';
$nom = 'Olivier';
$auteurs = ['Victor Hugo','Charles Baudelaire','Arthur Rimbaud','Paul Verlaine'];
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
    // Compter le nombre de lettres du nom.
    $i = 0;
    while ($nom[$i]??false) {
      $i++;
    }
    echo "Votre nom comporte $i lettres.<br />";
    // Déterminer si le nom commence par une voyelle ou une consonne.
    switch ($nom[0]) {
      case 'A':
      case 'E':
      case 'I':
      case 'O':
      case 'U':
      case 'Y':
        echo 'Votre nom commence par une voyelle.<br />';
        break;
      default:
        echo 'Votre nom commence par une consonne.<br />';
    }
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