#   EXERCICE 8 - Récupérer des données passées par URL  #

Dans cette exeercice, nous allons apprendre à passer des informations d'une page à une autre par URL.

## ETAPE 1

Nous allons commencer par écrire un script php permettant d'afficher la liste des auteurs, chaque élément de la liste comportant un lien permettant d'afficher une page donnant des informations détaillées sur l'auteur. 

Indications : 
  - Dans un nouveau répertoire, copiez les script **commun.inc.php** et **accueil.php** développés dans l'exercice 2; dans le script **accueil.php**, conservez uniquement le code relatif à l'affichage de la liste des auteurs.
  - Modifiez l'affichage de la liste des auteurs afin que chaque auteur soit un lien vers une page nommée **auteur.php**; l'URL doit contenir un paramètre nommé numéro dont la valeur est égale au numéro de l'auteur (indice dans le tableau ***$auteur***).
    
Résultat attendue (exemple de lien):
    <a href="auteur.php?numero=0">Victor Hugo</a>


## ETAPE 2 

Nous allons maintenant écrire un script PHP qui est appelé par la page.

Indications : 
  - Créer un nouveau script php nommé **auteur.php**
  - Dans ce script, insérez une section de code PHP qui doit inclure le script **commun.inc.php**, récupèrez le numéro de l'auteur passé dans l'URL, puis le nom de l'auteur correspondant dans le tableau ***$auteur***.  
  - Ajoutez ensuite le code HTML de la page intitulé "Auteur" et afficher le nom de l'auteur dans une balise <h1> (dans une version plus complète, cette page serai utilisé pour afficher des information détaillé sur l'auteur).
  - Ajoutez aussi un lien "Retour à la liste" qui permet de revenir à la page accueil.php