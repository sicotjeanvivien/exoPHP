<?php
const NOM_SITE = 'monSite.com';
$auteurs = ['Victor Hugo','Charles Baudelaire','Arthur Rimbaud','Paul Verlaine'];

function commence_par_voyelle_ou_consonne(string $nom) : string
{
    $response = 'Votre nom commence par une consonne.<br />';
    $voyelles = ['A', 'E', 'I', 'O', 'U', 'Y'];
    if (in_array(strtoupper($nom[0]), $voyelles)) {
      $response = 'Votre nom commence par une voyelle.<br />';
    } 
    return $response;
}

function nombre_voyelle(string $nom) :string
{
    $nombre_voyelles = preg_match_all('/[AEIOUY]/i', $nom);
    return "Votre nom comporte $nombre_voyelles voyelles.<br />";
}


?>
