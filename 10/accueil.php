<?php
include_once('commun.inc.php'); 
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
    <!-- Afficher le tableau des auteurs. -->
    <table>
    <tr><th>Auteurs</th></tr>
    <?php
    foreach ($auteurs as $numero => $auteur) {
      echo "<tr><td><a href=\"auteur.php?numero=$numero\">$auteur</a></td></tr>";
    }
    ?>
    </table>
    </div>
  </body>
</html>