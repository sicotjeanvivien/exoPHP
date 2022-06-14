<?php
session_start();
include_once('commun.inc.php');

$numero = is_numeric($_GET["numero"]) ? intval($_GET["numero"])  : FALSE;
$auteur = null;
if ( is_int($numero) && array_key_exists($numero, $auteurs)) {
	$auteur = $auteurs[$numero];
}



if (!isset($_SESSION["visites"])) {
	$_SESSION["visites"] = [];
}
if (!in_array($auteur, $_SESSION["visites"])) {
	$_SESSION["visites"][time()] = $auteur;
	krsort($_SESSION["visites"]);
	$array = array_slice($_SESSION["visites"], 0, 3, true);
	$_SESSION["visites"] = $array;
}


// var_dump($_SESSION);
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="fr">

<head>
	<meta charset="utf-8" />
	<title>Auteur</title>
</head>

<body>
	<h1><?= !empty($auteur) ? $auteur : 'Auteur introuvable' ?></h1>
	<p><a href="index.php">Retour à la liste</a></p>
</body>

</html>