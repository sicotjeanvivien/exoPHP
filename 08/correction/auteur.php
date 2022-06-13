<?php require_once "commun.inc.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

   <p><?php echo $auteurs[$_GET["numero"]] ?></p>

    <a href="/accueil.php">liste</a>

</body>
</html>