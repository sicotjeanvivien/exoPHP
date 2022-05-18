<?php
// Pas d'affichage des messages d'erreur PHP. 
error_reporting(0);
// Connexion.
$ok = (bool) ($connexion = oci_connect('demeter','demeter','diane','AL32UTF8')); 
// Exécution de la requête de sélection.
if ($ok) { 
  // Texte de la requête.
  $sql = 'SELECT prenom,nom FROM auteurs ORDER BY nom'; 
  // Analyse de la requête.
  $ok = (bool) ($requête = oci_parse($connexion, $sql));  
  // Exécution de la requête.  
  if ($ok) {  
    $ok = oci_execute($requête);  
  }
}
// Récupération d'un éventuel message d'erreur.
if (! $ok) {
  if (! $connexion) { // erreur de connexion
    $erreur = oci_error()['message'];
  } elseif (! (isset($requête) and $requête)) { // erreur lors de l'analyse
    $erreur = oci_error($connexion)['message'];
  } else { // erreur après l'analyse
    $erreur = oci_error($requête)['message'];
  }
  $message = "Erreur lors de l'exécution de la requête ($erreur).";
}
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
    <table id="auteurs">
    <tr><th>Auteurs</th></tr>
    <?php
    if ($ok) {
      while ($auteur = oci_fetch_array($requête)) {
        echo "<tr><td>{$auteur['NOM']} ({$auteur['PRENOM']})</td></tr>";
      }
      $ok = (oci_error($requête) === FALSE);
      $nombre_auteurs = oci_num_rows($requête);
      // En cas d'erreur ou si le résultat est vide, préparer un message. 
      if (! $ok) { // erreur lors de la lecture 
        $message = "Erreur lors de la lecture des auteurs (résultat partiel)."; 
      } elseif ($nombre_auteurs == 0) { // aucun auteur 
        $message = 'Aucun auteur dans la base.'; 
      } 
    }
    ?>
    </table>
    </div>
    <!-- Affichage d'un éventuel message. --> 
    <div><?= $message ?? '' ?></div>
    <!-- Lien pour saisir un nouvel auteur. --> 
    <p><a href="saisie.php">Saisir un nouvel auteur</a></p>
    <script>
    // Masquer le tableau des auteurs s'il est vide.
    if (document.getElementById("auteurs").rows.length <= 1) 
      { document.getElementById("auteurs").style.display = "none"; }
    </script>
  </body>
</html>