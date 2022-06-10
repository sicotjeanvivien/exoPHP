<?php
require_once "commun.inc.php";

$file = fopen("auteurs.json", "w");
fwrite($file, json_encode($auteurs));
fclose($file);

header('location: index.php');
