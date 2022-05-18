############################################################
#   EXERCICE 4 - Ecrire et lire un fichier sur le serveur  #
############################################################

Repartez du  script de l'exercice 3 et apporter les modification suivantes
Dans cette exercice, nous allons apprendre à écrire et lire dans un fichier sur le serveur
 
## ETAPE 1
 
Nous allons commencer par écrire un script qui enregistre la liste des auteurs dans un fichier.
 
Indications :
    * - dans un nouveau répertoire, copiez le script **common.inc.php** développé dans l'exercice 2 puis créez un nouveau script intitulé enregistrer **auteur.php**
    * - dans ce nouveau script, commencez par inclure le script **common.inc.php**
    * - écrivez les instructions qui vont permettre d'enregistrer la liste des auteurs (tableau ***$auteurs***) dans un fichier nommé **auteurs.txt**, en écrivant une ligne pour chaque auteur.
 
## ETAPE 2
 
Nous allons maintenant écrire un script PHP qui affiche la liste des auteurs lus dans le fichier enregistré précédemment.
 
Indications :
    * - dans le répertoire de cet exercice, copiez le script **accueil.php** développé dans l'exercice 2
    * - dans ce script, conservez uniquement le code relatif à l'affichage de la liste des auteurs
    * - dans la section de code PHP initiale, supprimez l'instruction d'inclusion du fichier **commun.inc.php** ( et la déclaration de la variable ***$nom*** qui n'est plus utilisé) et écrivez les instructions qui permet de lire le contenu du fichier **auteur.txt** dans le tableau ***$auteurs*** utilisé pour l'affichage (assurez-vous que les caractères de nouvelle ligne ne sont pas ajoutés à la fin de chaque élément du tableau).
 
## ETAPE 3
 
Pour terminer, nous souhaitons rediriger le navigateur vers la page d'affichage de la liste des auteurs à la fin de l'enregistrement dans le fichier.
 
Indications :
    * - à la fin du script enregistrer **auteurs.php**, insérer une redirection vers le script **accueil.php**
 

