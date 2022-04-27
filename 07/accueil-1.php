<?php
// Désactiver l'affichage des erreurs.
error_reporting(0);
// Lire la liste des auteurs à partir du fichier.
$auteurs = file('auteurs.txt',FILE_IGNORE_NEW_LINES);
// Affecter la variable $ok.
$ok = ($auteurs !== FALSE);

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
    <?php if ($ok): // condition PHP ?> 
    <!-- Afficher le tableau des auteurs 
        (uniquement en cas de succès). -->
    <table>
    <tr><th>Auteurs</th></tr>
    <?php
    foreach ($auteurs as $auteur) {
      echo "<tr><td>$auteur</td></tr>";
    }
    ?>
    </table>
    <?php else: // suite de la condition PHP ?> 
    <!-- Afficher un message d'erreur et un lien. -->
    Erreur lors de la lecture de la liste des auteurs.<br />
    <a href="accueil-1.php">Essayer de nouveau</a>
    <?php endif; // fin de la condition PHP ?> 
    </div>
  </body>
</html>