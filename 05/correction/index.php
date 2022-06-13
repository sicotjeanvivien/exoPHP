<?php
include_once('commun.inc.php');
$nom = 'Marie';
$date = new \DateTime('now', new DateTimeZone('Europe/Paris'));
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
		// Déterminer si le nom commence par une voyelle ou une consonne.
		echo "<p>$nom</p>";
		echo "<p>" . commence_par_voyelle_ou_consonne($nom) . "</p>";
		// Compter le nombre de voyelles du nom.
		echo "<p>" . nombre_voyelle($nom) . "</p>";
		?>
		<!-- Afficher le tableau des auteurs. -->
		<table>
			<tr>
				<th>Auteurs</th>
			</tr>
			<?php
			asort($auteurs);
			foreach ($auteurs as $auteur) {
				[$prenom_auteur, $nom_auteur] = explode(' ', $auteur);
				echo "<tr><td>$nom_auteur ($prenom_auteur)</td></tr>";
			}
			?>
		</table>
	</div>
</body>

</html>