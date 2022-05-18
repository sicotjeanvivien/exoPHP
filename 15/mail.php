<?php
// Traitement du formulaire.
if (isset($_POST['ok'])) {
  // Récupération des informations saisies (qu'il faudrait vérifier).
  $a = $_POST['a'];
  $de = $_POST['de'];
  $objet = $_POST['objet'];
  $texte = $_POST['texte'];
  // En-têtes supplémentaires. 
  $entêtes['From'] = $de; 
  $entêtes['Reply-To'] = $de; 
  $entêtes['Content-Type'] = 'text/plain; charset=utf-8'; 
  $entêtes['X-Priority'] = '1'; 
  // Envoi du message.
  $ok = mail($a,$objet,$texte,$entêtes); 
}
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>Nouveau message</title>
    <style>
    label { display: block; width: 60px; float: left; }
    </style>
  </head>
  <body>
    <!-- Affichage du formulaire --> 
    <form action="mail.php" method="post"> 
    <div>
      <label>A</label>
      <input type="text" name="a" size="40" maxlength="40" /> 
      <br /><label>De</label>
      <input type="text" name="de" size="40" maxlength="40" /> 
      <br /><label>Objet</label>
      <input type="text" name="objet" size="40" maxlength="40" /> 
      <br /><label>Texte</label> 
      <textarea name="texte" rows="20" cols="80"></textarea>
      <br /> 
      <input type="submit" name="ok" value="Envoyer" /> 
    </div> 
    </form>
  </body>
</html>