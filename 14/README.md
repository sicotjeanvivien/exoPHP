#   EXERCICE 14 - Gérer les sessions  #

    * Dans cet exercice, nous allons apprendre à utiliser la gestion de PHP afin d'afficher la liste des trois derniers auteurs consultés par l'utilisateur.

## ETAPE 1

Nous allons commencer par enregister dans une session la liste des trois derniers auteurs consultés par l'utilisateur, dans l'ordre inverse de la visite (le dernier auteur visité figure en premier dans la liste). Un auteur visité déjà dans la liste doit remonter en tête de liste et ne pas y figurer deux fois.
Exemple : 
    
|    visite           |          Résultat
|   :-------------:   |     :-------------:
|Victor Hugo          |       Victor Hugo
|Arthur Rimbaud       |       Arthur Rimbaud - Victor Hugo
|Paul Verlaine        |       Paul Verlaine - Arthur Rimbaud - Victor Hugo
|Charle Baudelaire    |       Charle Baudelaire - Paul Verlaine - Arthur Rimbaud
|Paul Verlaine        |       Paul Verlaine - Charle Baudelaire - Arthur Rimbaud

Pour obtenir ce résultat, nous allons utiliser un tableau qui utilise le numéro de l'auteur comme indice et qui stock le timestamp UNIX de la dernière visite. Un auteur qui n'est pas présent dans le tableau sera ajouté dans le tableau; par contre, si l'auteur figure déjà dans le tableau son timestamp sera mis à jour. Dans les deux cas, le dernier visité aura le timestamp le plus élevé dans le tableau; en triant le tableau dans l'order décroissant, nous obtiendronsbien la liste des auteurs visités dans l'ordre inverse de la visite. Il ne reste plus alors qu'à conserver uniquement les trois premiers éléments du tableau.

Le tableau stocké en variable de session(dans **$_SESSION**) s'appellera ***visites***.

Exemple de contenu possible du tableau **$_SESSION** : 
*$_SESSION =
    *visites =
        *3 = 1528723031
        *1 = 1528723027
        *2 = 1528723021

La syntaxe dy type ***$_SESSION['visites'][n]*** permet d'accèder à l'auteur numéro ***n*** stocké dans le tableau des auteurs visités.

Indications : 
    - Dans un nouveau répertoire, copiez les script **commun.inc.php**, **accueil.php** et **auteur.php** développés dans l'exercice 10.
    - Dans le script **auteur.php**, après avoir récupéré le nom de l'auteur visité, ouvrez une session.
    - Dans la variable de session nommée ***visites***, enregistrez le timestamp UNIX actuel pour le numéro de l'auteur visité.
    - Triez le tableau des auteurs visités en ordre décroissant, en vous assurant de b ien préserver les clés
    - Conserver uniquement les premiers éléments du tableau des auteurs  visités; pour cela, vous pouvez utiliser la fonction **array_slice** (voir la documentationde PHP), là encore en vous assurant de bien préserver les clés. 

## ETAPE 2

Nous allons maintenant afficher la liste des trois derniers auteurs visités sur la page d'accueil.

Indications : 
    - Dans le script **accueil.php**, ouvrez une session
    - Si l'entrée ***visites*** exite dans les données de session, parcourez le tableau des auteurs visités en récupérant le numéro de l'auteur (et le timestamp de derniére visite qui ne sera pas utilisé ici) et constituez la liste des auteurs visités dans une châine de caratéres nommée ***$auteur_vus***, en utilisant le trait d'union comme séparateur. 
    - Dans la page HTML, sous le tableau des auteurs, affichez un message du type "Trois derniers auteurs consultés : ...", uniquement si la liste des auteurs visités n'est pas vide.

Résultat attendu (aucun auteur visité)

|         Auteurs         |
|     :-------------:     |
|   Victor Hugo           |
|   Charle Baudelaire     |
|   Arthur Rimbaud        |
|   Paul Verlaine         |


Résultat attendu (un auteur visité)

|         Auteurs         |
|     :-------------:     |
|   Victor Hugo           |
|   Charle Baudelaire     |
|   Arthur Rimbaud        |
|   Paul Verlaine         |

Trois dernier auteurs consultés : Victor Hugo

Résultat attendu (plusieur auteurs visités)

|         Auteurs         |
|     :-------------:     |
|   Victor Hugo           |
|   Charle Baudelaire     |
|   Arthur Rimbaud        |
|   Paul Verlaine         |

Trois dernier auteurs consultés : Paul Verlaine - Arthur Rimbaud - Victor Hugo