<?php
$nom = null;
$prenom = null;
if (
    isset($_POST["nom"])
    && isset($_POST["prenom"])
    && strlen(trim($_POST["nom"]))
    && strlen(trim($_POST["prenom"]))
) {
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
}
var_dump($nom);
var_dump($prenom);

$auteur = !empty($nom) && !empty($prenom) ?  "$nom $prenom" : "";

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
    <h1>Exercice 09</h1>

    <form action="" method="post">
        <label for="nom">Nom</label>
        <input type="text" name="nom" id="nom">
        <label for="prenom">Prenom</label>
        <input type="text" name="prenom" id="prenom">
        <input type="submit" value="Envoyer">
    </form>
    <p>
        <?php echo $auteur ?>
    </p>

</body>

</html>