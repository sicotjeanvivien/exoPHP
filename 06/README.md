#   EXERCICE 6 - Ecrire une classe  #

## ETAPE 1
 
Indications :
  - Dans un nouveau répertoire , créer un script nommé **AuthorClass.php**
  - définir la classe  **author** avec ces caractéristiques :
 
    constante de classe :  
        PRENOM_ENTRE_PARENTHESE
        PRENOM_APRES_VIRGULE
 
    Propriétés :
      - $nom
      - $prenom
   
    Méthodes :  
       
        __construct($patronyme) :
            Méthode constructeur.
            $patronyme =  nom complet de l’auteur sous la forme “prénom nom”.
            Cette méthode récupère le prénom et le nom dans le paramètre et les stocke dans les propriétés ***$prenom*** et ***$nom***.
       
        __tostring() :
            Méthode de conversion de l’objet en chaîne.
            Retourne le nom complet au format “prénom nom”
 
        format($format = NULL) :
            Méthode qui retourne le nom de l’auteur mis en forme en fonction de la valeur du paramètre.
          - "nom (prénom)" si le paramètre est égal à la constante de classe : PRENOM_ENTRE_PARENTHESE
          - "nom, prénom" si le paramètre est égal à la constante de classe :  PRENOM_APRES_VIRGULE
          - "prénom nom" si le paramètre est égal à la valeur NULL
          - une exception "throw" est levée pour toute autre valeur avec le message "Format inconnu"
 
## ETAPE 2
   
  -   Créer un nouveau script PHP intitulé **accueil.php** et écrivez le code permettant d'afficher une page HTML intitulé ***accueil***
  -   Au début du script, écrivez une instruction permettant d'inclure la définition de la classe.
  -   Dans la page HTML, incorporez une section de code PHP qui va instancier un nouvel auteur avec le nom de votre choix, afficher l'objet directement dans la page, puis appeler la méthode **format()** successivement sans paramètre, puis avec les deux constantes de classe, puis une valeur quelconque. Ecrivez ce code à l'intérieur d'un **TRY{} CATCH {}** afin d'afficher le message d'erreur d'une éventuelle exception sous forme "Erreur : message".
 
Résultat attendue:
    Victor Hugo
    Victor Hugo
    Hugo (Victor)
    Hugo, Victor
 

