#########################################################
#   EXERCICE 10 - Contrôle des données passées par URL  #
#########################################################

Dans cette exercice, nous allons apprendre à contrôler des données passées par l'URL.

Indications :
    * - Dans un nouveau répertoire, copiez les script **commun.inc.php**, **accueil.php** et **auteur.php** développés dans l'exercice 8.
    * - Dans le script **auteur.php**, alimentez la variable ***$auteur*** avec le nom de l'auteur uniquement si le numéro passé dans l'URL est un entier et que ce numéro correspond bien au numéro d'un auteur (indice dans le tableau).
    * - Dans la page HTML, affichez le nom de l'auteur s'il est défini ou "Auteur introuvable" dans le cas contraire.
    * - Testez le script modifié an l'appelant directement dans votre navigateur avec différent cas :
        * - auteur.php (sans paramètre)
        * - auteur.php?numero  (paramètre vide)
        * - auteur.php?numero=abc  (paramètre du mauvais type)
        * - auteur.php?numero=99  (numèro qui n'existe pas)
        * - auteur.php?numero=0  (paramètre correcte)