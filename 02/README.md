#####################################################
#   EXERCICE 2 - Variable et structure de contrôle  #
#####################################################

## Etape 1
 
Repartez du  script de l'exercice 1 et apporter les modification suivantes
 
indication :
    * - Au début du script, incorporez une section de code php qui définit une constante ***NOM_SITE*** contenant la valeur "monSite.com" et une variable ***$nom*** contenant un prénom (par exemple "Olivier").
    * - Utilisez cette constante et cette variable dans les messages affichés dans la page.
 
## Etape 2
 
Nous souhaitons maintenant compter le nombre de lettres du nom. Ne pas utiliser la fonction native de PHP. Utiliser une boucle suivi d'un compteur au passage.
 
indication :
    * - il est possible d'accéder au nième caractère d'une chaîne grâce à la notation ***$x[i]***, ***$x*** désignant la variable de type chaîne et i le numéro du caractère. Lorsque l'indice dépasse le dernier caractère de la chaîne, une chaîne vide est retournée, valeur équivalente à **FALSE** dans une condition
    * - Utilisez la boucle **WHILE**
    * - Afficher un message type "Votre nom comporte n lettres"
 
## Etape 3
 
Nous souhaitons aussi indiquer si le nom commence par une voyelle ou une consonne.
 
indication :
    * - nous ferons l'hypothèse que le nom commence par une lettre majuscule
    * - à l'aide d'une structure de contrôle **IF** ou **SWITCH**, comparez la première lettre de nom avec les sept voyelles et affichez un message en conséquence (du type " votre nom commence par une voyelle/consonne")
 
## Etape 4
 
Nous allons maintenant afficher la liste de nos poètes préférés.
 
Indications :
    * - dans la section initiale du code PHP, définissez un tableau nommé ***$auteur*** qui contient les écrivains suivants Victor Hugo, Charles Baudelaire, Arthur Rimbaud et Paul Verlaine.
    * - dans la page, construisez un table html (<table>.....</table>) comportant une ligne de titre et une ligne pour chaque ligne du tableau ***$auteur***
    * - N'hésitez pas à définir quelques styles CSS pour améliorer l'affichage du tableau dans la page
 
## Etape 5
 
Pour terminer, nous allons stocker des définitions communes dans un fichier séparé qui sera inclus dans le script actuel
 
Indications :
    * - créez un fichier nommé **commun.inc.php** contenant une section de code php dans laquelle vous copierez la définition de la constante ***NOM_SITE*** et du tableau ***$auteur***
    * - supprimer ces définitions du script actuel et incluez le fichier précédent à la place
 

