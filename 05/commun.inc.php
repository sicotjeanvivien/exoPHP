<?php
const NOM_SITE = 'monSite.com';
$auteurs = ['Victor Hugo','Charles Baudelaire','Arthur Rimbaud','Paul Verlaine'];
// & opérateur d'affectation par référence 
function analyser_voyelles($texte,&$nombre,&$commence_par) {
  $commence_par = in_array(strtoupper($texte[0]),['A','E','I','O','U','Y']);
  $nombre = preg_match_all('/[AEIOUY]/i',$texte);
}
?>
