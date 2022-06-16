<?php

$nom = "";
$prenom = "";
$ok = false;
$message = "Erreur lors de l'exécution de la requête.";

if (
    !empty($_POST)
    && isset($_POST["nom"])
    && isset($_POST["prenom"])
    && strlen($_POST["nom"])
    && strlen($_POST["prenom"])
) {
    $nom = trim($_POST["nom"]);
    $prenom = trim($_POST["prenom"]);

    $pdo = new PDO("mysql:host=localhost;port=3306;dbname=exo_php_12", "root", "root");
    $qp = $pdo->prepare("INSERT INTO auteurs(nom, prenom) VALUES (:nom, :prenom);");
    $qp->bindParam(":nom", $nom);
    $qp->bindParam(":prenom", $prenom);
    $ok = $qp->execute();
    if ($ok) {
        $message = "Auteur créé.";
    }
}

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
    <h1>Ajouter un nouveau auteur</h1>
    <!-- Formulaire de saisie de l'auteur. -->
    <form method="post" action="index.php">
        <div>
            <b>Prénom et nom du nouvel auteur :</b>
            <br /><label>Prénom</label>
            <input type="text" name="prenom" size="40" maxlength="40" value="<?php echo $prenom ?>" autofocus="autofocus" />
            <br /><label>Nom</label>
            <input type="text" name="nom" size="40" maxlength="40" value="<?= $nom ?>" />
            <br />
            <input type="submit" name="ok" value="Enregistrer" />
        </div>
    </form>
    <p><?php echo $message ?? ''  ?></p>
    <p><a href="afficheAuteurs.php">Afficher la liste</a></p>


</body>

</html>