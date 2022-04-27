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
    // Afficher les messages
    echo "Bonjour $nom.<br />";
    echo 'Bienvenue sur ', NOM_SITE, '.<br />';
    // Compter le nombre de lettres du nom.
    $i = 0;
    // ?? opérateur de fusion null
    while ($nom[$i] ?? false) {
      $i++;
    }
    echo "Votre nom comporte $i lettres.<br />";
    ?>
  </div>
</body>

</html>