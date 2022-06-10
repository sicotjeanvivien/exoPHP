<?php
// require_once('enregistrer_auteur.php');

$file_auteurs = file_get_contents("auteurs.json");


$auteurs = json_decode($file_auteurs);
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
		<!-- Afficher le tableau des auteurs. -->
		<table>
			<tr>
				<th>Auteurs</th>
			</tr>
			<?php
			asort($auteurs);
			foreach ($auteurs as $auteur) {
				$auteur_name = explode(' ', $auteur);
				$prenom_auteur =  $auteur_name[1];
				$nom_auteur = $auteur_name[0];
				echo "<tr><td>$nom_auteur ($prenom_auteur)</td></tr>";
			}
			?>
		</table>
	</div>
</body>

</html>