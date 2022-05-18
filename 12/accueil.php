<?php
// Pas d'affichage des messages d'erreur PHP. 
error_reporting(0);
// Connexion et sélection de la base de données.
$ok = (bool) ($connexion = mysqli_connect()); 
if ($ok) {
  $ok = mysqli_select_db($connexion,'diane');
}
// Exécution de la requête de sélection.
if ($ok) { 
  // Texte de la requête.
  $sql = 'SELECT prenom,nom FROM auteurs ORDER BY nom'; 
  // Préparation de la requête.
  $ok = (bool) ($requête = mysqli_prepare($connexion, $sql));  
  // Liaison des colonnes du résultat.  
  if ($ok) {
    $ok = mysqli_stmt_bind_result($requête,$prenom,$nom);  
  }
  // Exécution de la requête.  
  if ($ok) {  
    $ok = mysqli_stmt_execute($requête);  
  }
}
// Récupération d'un éventuel message d'erreur.
if (! $ok) {
  if (! $connexion) { // erreur de connexion
    $erreur = mysqli_connect_error();
  } elseif (! (isset($requête) and $requête)) { // erreur de préparation
    $erreur = mysqli_error($connexion);
  } else { // erreur ailleurs
    $erreur = mysqli_stmt_error($requête);
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
      while ($ok = mysqli_stmt_fetch($requête)) {
        echo "<tr><td>$nom ($prenom)</td></tr>";
      }
      $nombre_auteurs = mysqli_stmt_num_rows($requête);
      // En cas d'erreur ou si le résultat est vide, préparer un message. 
      if ($ok === FALSE) { // erreur lors de la lecture 
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