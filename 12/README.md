#   EXERCICE 12 - utiliser MySQL  #

Dans cette exeercice, nous allons développer une petite application de deux pages qui permet de gérer les auteurs dans la base de données MySQL.
Pour cet exercice, vous devez disposer d'un accés à une base de données MySQL et y créer la table suivant : 
    **CREATE TABLE auteurs (**
        **prenom VARCHAR(40) NOT NULL,**
        **nom VARCHAR(40) NOT NULL,**
        **PRIMARY KEY (nom, prenom)**
    **);**

## ETAPE 1

Nous allons commencer par créer une page qui permet d'enregistrer de nouveaux auteurs dans la base de données.

Indications : 
  - Dans un nouveaux répertoire, copiez le script **saisie.php** dans le exercice 11.
  - Au début du script, insérez une instruction qui permet de masquer l'affichage des erreurs PHP (pendant la phase de test, vous pouvez modifier cette instruction afin d'afficher tous les messages d'erreur).
  - Dans la structure de contôle qui teste le réultat du filtre de vérification de la saisie, initialisezune variable ***$ok*** à **FALSE** en cas d'erreur et **TRUE** en cas de succès. En cas de succès, récupérez les valeurs saisies dans les variables ***$premon*** et ***$nom***.
  - Si la saisie est correcte (test de la variable ***$ok***), insérez les instructions qui vont permettre d'enregistrerle nouvel auteur dans la base de données : 
        -connexion et sélection de la base de données;
        -préparation de la requête d'insertion;
        -liaison des paramètres (avec les variables ***$premon*** et ***$nom***);
        -exécution de la requête préparée
  - Dans le code précédent, à chaque étape, testez le résultat de l'instruction et affectez la variable ***$ok*** en conséquence, et exécutez l'instruction suivant uniquement en cas de succès.
  - A la fin de l'enregistrement du nouvel auteur dans la base de données, testez si tout s'est bien passé. En cas de succès, préparez un message du type "nom prénom enregitré avec succès." dans la variable ***$message*** et réinitialisez les variables ***$prenom*** et ***$nom***. En cas d'erreur, récupérez le message d'erreur MySQL et préparez un message du type "Erreur lors de l'exécution de la requête (texte de l'erreur MySQL)." dans la variable ***$message***. Une erreur éventuelle a pu se produire lors de la connexion, lors de la préparation de la requête ou après; pour récupérer le message d'erreur, vous devez déterminer à quelle étapes l'erreur s'est produite, par exemple en testant la valeur de l'identifiant de connexion et de l'identifiant de requête, afin d'appeler la fonction adaptée.
  - Dans la page HTML, à la fin, affichez le contenu de la variable ***$message*** puis ajoutez un lien intitulé "Afficher la liste" vers la page **accueil.php**.

## ETAPE 2

Nous allons maintenant créer une page qui permet d'afficher la liste des auteurs enregistrés dans la base de données.

Indications : 
  - Dans le répertoire de l'exercice, copiez le script **accueil.php** développé dans l'exercice 4 et supprimez l'instructionqui lit la liste des auteurs à partir du fichier.
  - Au début du script, insérez une instruction qui permet de masquer l'affichage  des erreurs PHP (pendant la phase de test, vous pouvez modifier cette instruction afin d'afficher tous les messages d'erreurs).
  - Ajoutez ensuite les instructions qui vont permettre de lire la liste des auteurs dans la base de données :
      - connexion et sélection de la base de données;
      - préparation de la requête de lesture (les auteurs doivent être triés sur leur nom);
      - liaison des colonnes du résultat avec des variables ***$premon*** et ***$nom*** ;
      - exécution de la requête préparée;
  - Dans le code précédent, à chaque étapes, testez les résultats de l'instruction et affectez la variable ***$ok*** en conséquence, et exécutez l'instruction suivante uniquement en cas de succés.
  - Après l'exécution de la requête de lecture, testez si tout s'est bien passé. En cas d'erreur, récupérez le message d'erreur MySQL et préparez un message du type "Erreur lors de l'exécution de la requête (texte de l'erreur MySQL)." dans la variable ***$message***.  Une erreur éventuelle a pu se produire lors de la connexion, lors de la préparation de la requête ou après; pour récupérer le message d'erreur, vous devez déterminer à quelle étapes l'erreur s'est produite, par exemple en testant la valeur de l'identifiant de connexion et de l'identifiant de requête, afin d'appeler la fonction adaptée.
  - Dans la page HTML, modifier le code PHP qui génère les lignes du tableau HTML qui affiche la liste des auteurs : 
      - exécutez le code uniquement si l'exécution préalable de la requête s'est bien passée (variable ***$ok***);
      - dans la boucle, écrivez une instruction qui permet de lire les différentes lignes du résultat de la requête et affectez la variable ***$ok*** avec  le réultat de l'appel à la fonction;
      - dans la ligne  du tableau, affichez le nom de l'auteur sous la forme "nom (prénom)" (utilisez les variables ***$prenom*** et ***$nom*** normalement liées aux colonnes du résultat de la requête);
      - après la boucle de lecture du résultat de la requête, renseignez la variable ***$nombre_auteurs*** avec le nombre de ligne extraites;
      - en cas d'erreur lors de l'extraction, préparez un message de type "Erreur lors de la lecture des auteurs (résultat partiel)." dans la variable ***$message*** ;
      - sinon, si la requête n'a retourné aucune ligne, préparez un message de type "Aucun auteur dans la base." dans la variable ***$message*** ;
  - A la fin, affectez le contenu de la variable ***$message*** puis ajoutez un lien intitulé "Saisir un  nouvel auteur" vers la page **saisie.php**.
  - En bonus, ajoutez le code permettant de ne pas affciher du tout le tableau s'il est vide, la difficulté étant que la ligne de titre du tableau est afficher avant que le résultat ne soit connu. Pour résoudre ce problème, il est possible d'utiliser un peu de code JavaScript.