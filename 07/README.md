#####################################
#   EXERCICE 7 - Gérer les erreurs  #
#####################################

Dans cette exercice, nous allons apprendre à gérer les erreurs dans un script PHP
 
## ETAPE 1
 
Nous allons analyser ce qui se passe si un script cherche à lire le contenu d'un fichier qui n'existe pas
 
Indications :
    * - Dans un nouveau répertoire, copier le script accueil.php développé dans l'exercice 4 (sans copier le fichier **auteurs.txt**)
    * - Appeler ce script dans votre navigateur
 
Résultat attendue :
    2 erreurs php
 
En l'état actuel des choses, si le fichier **auteurs.txt** n'existe pas, deux erreurs se produisent et sont affichées dans la page, une lors de la lecture du fichier et une lors du parcours du tableau (suite à l'erreur initiale la variable $auteurs contient la valeur FALSE).
 
## ETAPE 2
 
Nous souhaitons améliorer le comportement de notre script en cas d'erreur en contrôlant l'affichage du message d'erreur.
 
Indications :
    * - Au début du script, insérer une instruction qui désactive l'affichage des erreurs de PHP
    * - Testez le résultat de l'appel à la fonction **file()** et affectez une variable ***$ok*** qui indiquera si la lecture du fichier s'est terminé avec succés ou pas
    * - Dans la page, en cas de succès de la lecture du fichier, affichez la table HTML qui contient la listes des auteurs; dans le cas contraire, afficher un message du type "erreur lors de la lecture de la liste des auteurs" suivi d'un lien "Essayer de nouveau" qui appelle de nouveau la page. Pour cela, souvenez-vous qu'il existe une syntaxe spéciale de la structure de contrôle if qui permet d'incorporer ou non des portions de code HTML dans une page.
   
Résultat attendue :
    Erreur lors de la lecture de la liste des auteurs
    Essayer à nouveau
 
## ETAPE 3
 
En complément, nous souhaitons enregistrer des informations sur les erreurs qui se produisent dans notre script dans un fichier journal. Pour cela, nous allons utiliser un gestionnaire d'erreur personnalisé.
 
Indications :
    * - Définissez une fonction nommée gestionnaire erreurs qui accepte quatre paramètres : ***$niveau*** pour le niveau de l'erreur, ***$message*** pour le message d'erreur, ***$fichier*** pour le nom du fichier dans lequel l'erreur est apparue et ***$lignes*** pour le numéro de la ligne où l'erreur s'est produite.
    * - Cette fonction doit envoyer un message vers un fichier nommé **erreurs.log**. Ce message doit avoir la structure date - fichier (ligne) - message, avec une date au format ISO 8601
    * - Indiquez ensuite à PHP d'utiliser la fonction précédente comme gestionnaire d'erreur
 
Résultat attendue :
2021-03-06T16:30:27+01:00 - /app/script/exercices/07/accueil.php (13) - file (auteurs.txt) : Failed to open stream: No such file or directory
 
 

