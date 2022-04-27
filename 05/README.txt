Dans cette exercice, nous allons écrire une fonction qui affiche une analyse des voyelles contenues dans une chaine de caractères.

Indications : 
    - dans un nouveau répertoire, copiez les sxripts accueil.php et commun.inc.php développés dans l'exercice 3
    - dans le script commun.inc.php définissez une fonction analyser_voyelle avec les paramétres suivant : 
        - $nom              Texte dont il faut analyser les voyelles 
        - $nombre           Paramétre passer par référence qui retourne le nombre de voyelles contenues dans le nom
        - $commence_par     Paramétre passé par référence qui retourne un booléen indiquant si le nom commence par une voyelles 
    - reprennez le code initialement écrit dans le script accueil.php afin d'alimenter les deux paramètres 
    - dans le script accueil.php, conservez uniquement le code qui affiche le nom, l'information que la première lettre du nom et le nombre de voyelles du nom, et appelez la fonction analyser_voyelles pour déterminer les deux valeurs précédentes 