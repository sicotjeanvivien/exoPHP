<?php 
require_once "AuthorClass.php";

$author = new Author("Leman Russ");

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
    <h1>Accueil</h1>
    <p><?php echo $author->format() ?></p>
    <p><?php echo $author->format(Author::PRENOM_APRES_VIRGULE) ?></p>
    <p><?php echo $author->format($author::PRENOM_ENTRE_PARENTHESE) ?></p>
    <p><?php echo $author->format("PRENOM_ENTRE_PARENTHESE") ?></p>
    <p><?php echo $author->format("kjsdbfkjsbdkjfb") ?></p>


</body>
</html>