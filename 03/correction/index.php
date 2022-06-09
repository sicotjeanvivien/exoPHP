<?php

require_once "commun.inc.php";

$lettre = "Error";
$auteurs = ["Victor Hugo", "Charles Baudelaire", "Arthur Rimbaud", "Paul Verlaine"];
$voyelles = ["a", "e", "y", "u", "i", "o"];
$n_voyelle = 0;
if (in_array(strtolower($nom[0]), $voyelles)) {
	$lettre = "Votre nom commence par une voyelle.";
}
if (strstr("zrtpqsdfghjklmwxcvbn", strtolower($nom[0]))) {
	$lettre = "Votre nom commence par une consonne.";
}


$date = new \DateTime("now");
$date = $date->format("d/m/Y H:i:s");

for ($i = 0; $i < strlen($nom); $i++) {
	if (in_array(strtolower($nom[$i]), $voyelles)) {
		$n_voyelle++;
	}
}

$n_auteur = count($auteurs);

$rand = rand(0, (count($auteurs) - 1));
$auteur_prefere_array = explode(" ", $auteurs[$rand]);
$auteur_prefere = $auteur_prefere_array[1] . " (" . $auteur_prefere_array[0] . ")";


$auteurs_multidimentionnel = [];
foreach ($auteurs as $key => $auteur) {
	$auteurArray = explode(" ", $auteur);
	$auteurs_multidimentionnel[] = [
		"nom" => $auteurArray[1],
		"prenom" => $auteurArray[0],
	];
}

array_multisort(
	$auteurs_multidimentionnel,
	array_column($auteurs_multidimentionnel, "nom"),
	array_column($auteurs_multidimentionnel, "prenom")
);

var_dump(array_column($auteurs_multidimentionnel, "prenom"));

$render_tbody = "";
foreach ($auteurs_multidimentionnel as $key => $auteur_multidimentionnel) {
	$render_tbody .= "<tr><td>" . $auteur_multidimentionnel["nom"] . " (" . $auteur_multidimentionnel["prenom"] . ")</td></tr>";
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
		echo "<p>Votre nom comporte " . strlen($nom) . " lettres.<p/>";
		echo "<p>Votre nom comporte $n_voyelle voyelle.<p/>";
		echo "<p>$lettre<p/>";
		echo "<p>Date du jour : $date.<p/>";
		echo "<p>Il y a $n_auteur auteurs dans la liste.<p/>";
		echo "<p>$auteur_prefere est mon auteur préféré.<p/>";
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