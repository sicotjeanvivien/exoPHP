<?php

require_once "commun.inc.php";
require_once "commun.inc.php";

$n = 0;
$lettre = "Error";
$auteurs = ["Victor Hugo", "Charles Baudelaire", "Arthur Rimbaud", "Paul Verlaine"];

while ($nom[$n] ?? false) {
	$n++;
}
if (strstr("aeyuio", strtolower($nom[0]))) {
	$lettre = "Votre nom commence par une voyelle.";
}
if (strstr("zrtpqsdfghjklmwxcvbn", strtolower($nom[0]))) {
	$lettre = "Votre nom commence par une consonne.";
}

$render_tbody = "";
foreach ($auteurs as $key => $auteur) {
	$render_tbody .= "<tr><td>$auteur</td></tr>";
}
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
		echo "<p>Bonjour $nom.<p/>";
		echo "<p>Bienvenue sur ", MON_SITE, ".<p/>";
		echo "<p>Votre nom comporte $n lettres.<p/>";
		echo "<p>$lettre<p/>";
		?>

		<table>
			<thead>
				<tr>
					<th>Nom</th>
				</tr>
			</thead>
			<tbody>
				<?php echo $render_tbody ?>
			</tbody>
		</table>
	</div>
</body>

</html>