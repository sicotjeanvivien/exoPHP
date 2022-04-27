<?php
include_once('commun.inc.php');
$nom = 'Olivier';
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="fr">

<head>
	<meta charset="utf-8" />
	<title>Accueil</title>
	<style>
		table {
			border-collapse: collapse;
		}

		table,
		td,
		th {
			border: 1px solid black;
		}

		td,
		th {
			padding: 4px;
		}
	</style>
</head>

<body>
	<div>
		<?php
		// Afficher les messages
		echo "Bonjour $nom.<br />";
		echo 'Bienvenue sur ', NOM_SITE, '.<br />';
		// Compter le nombre de lettres du nom.
		$i = 0;
		while ($nom[$i] ?? false) {
			$i++;
		}
		echo "Votre nom comporte $i lettres.<br />";
		// Déterminer si le nom commence par une voyelle ou une consonne.
		switch ($nom[0]) {
			case 'A':
			case 'E':
			case 'I':
			case 'O':
			case 'U':
			case 'Y':
				echo 'Votre nom commence par une voyelle.<br />';
				break;
			default:
				echo 'Votre nom commence par une consonne.<br />';
		}
		// autre bis
		if ($nom[0] === "A") {
			echo 'Votre nom commence par une voyelle bis.<br />';
		}
		if ($nom[0] === "E") {
			echo 'Votre nom commence par une voyelle bis.<br />';
		}
		if ($nom[0] === "I") {
			echo 'Votre nom commence par une voyelle bis.<br />';
		}
		if ($nom[0] === "O") {
			echo 'Votre nom commence par une voyelle bis.<br />';
		}
		if ($nom[0] === "U") {
			echo 'Votre nom commence par une voyelle bis.<br />';
		}
		if ($nom[0] === "Y") {
			echo 'Votre nom commence par une voyelle bis.<br />';
		}

		// autre bis 2

		if (
			$nom[0] === "A"
			|| $nom[0] === "E"
			|| $nom[0] === "I"
			|| $nom[0] === "O"
			|| $nom[0] === "U"
			|| $nom[0] === "Y"
		) {
			echo 'Votre nom commence par une voyelle bis 2.<br />';
		}

		// autre bis 3

		$voyelles = ["a", "e", "o", "i", "u", "y"];
		if (in_array(strtolower($nom[0]), $voyelles)) {
			echo 'Votre nom commence par une voyelle bis 3.<br />';
		}

		?>
		<!-- Afficher le tableau des auteurs. -->
		<table>
			<tr>
				<th>Auteurs</th>
			</tr>
			<?php
			foreach ($auteurs as $auteur) {
				echo "<tr><td>$auteur</td></tr>";
			}
			?>
		</table>
	</div>
</body>

</html>