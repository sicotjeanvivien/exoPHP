<?php
$auteurs = [];

$pdo = new PDO("mysql:host=localhost;port=3306;dbname=exo_php_12", "root", "root");
$qp = $pdo->prepare("SELECT nom, prenom FROM auteurs;");
$qp->execute();

$auteurs = $qp->fetchAll(PDO::FETCH_BOTH);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table>
        <tr>
            <th>Auteurs</th>
        </tr>
        <?php
        foreach ($auteurs as $auteur) {
            $nom = $auteur["nom"];
            $prenom = $auteur["prenom"];
            echo "<tr><td>$nom $prenom</td></tr>";
        }
        ?>
    </table>
</body>

</html>