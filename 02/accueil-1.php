<?php
const NOM_SITE = 'monSite.com';
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
    echo 'Bienvenue sur ',NOM_SITE,'.<br />';
    ?>
    </div>
  </body>
</html>