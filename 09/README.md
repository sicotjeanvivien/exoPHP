###################################################################
#   EXERCICE 9 - Récupérer des données saisies dans un fomulaire  #
###################################################################

Dans cette exercice, nous allons apprendre à récupérer les informations saisies dans un formulaire.

## ETAPE 1

Nous allons commencer par écrire un script PHP qui affiche un fomulaire permettant de saisir le prénon et le nom d'un auteur.

Indications : 
    * - Dans un nouveau répertoire, créez un nouveau script PHP **saisie.php**
    * - Dans ce nouveau script, saisissez le code HTML permettant d'afficher une page HTML intitulé "Saisie" contenant le formulaire. Les champs "Prénom" et "Nom" sont de type texte, de taille 40, et s'appelle respectivement ***prenom*** et ***nom*** (attrbut name). L'alignement des champs est obtenue gràce à l'utilisation de code CSS appliqué à des balises <label> (le design du formulaire est secondaire pour la réalisation de cet exercice). 
    * - Ce formulaire sera traité par le script **saisie.php**. 
    * - Pour l'instant, ce script ne contient pas de code PHP.

    
## ETAPE 2

Nous allons maintenant ajouter le code PHP qui permet de traiter le formulaire et de récupérer les informations saisies dans les deux champs.

Indications : 
    * - Au début du script, insérez une section de code PHP qui teste si le script est appelé en traitement du formulaire, et, si c'est le cas, récupére le contenu des champs "Prénom" et "Nom" dans deux  variables ***$prenom*** et ***$nom***. Définissez une autre  variable $auteur contenant la concaténation des deux variables précédentes séparées par un espace.
    * - Dans la page HTML, sous le formulaire, affichez la valeur de la variable $auteur si elle est définie.
