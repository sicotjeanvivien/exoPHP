<?php
include_once('commun.inc.php');
$nom = 'Olivier';
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
    echo "Bonjour $nom.<br />";
    analyser_voyelles($nom,$nombre_voyelles,$commence_par_voyelle);
    if ($commence_par_voyelle) {
      echo 'Votre nom commence par une voyelle.<br />';
    } else {
      echo 'Votre nom commence par une consonne.<br />';
    }
    echo "Votre nom comporte $nombre_voyelles voyelles.<br />";
    ?>
    </div>
  </body>
</html>