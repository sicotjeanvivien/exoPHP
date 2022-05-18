####################################################################
#   EXERCICE 11 - Contrôle des données saisies dans un formulaire  #
####################################################################

Dans cette exercice, nous allons apprendre à contrôler des données saisies dans un formulaire.

## ETAPE 1 

Nous allons commencer par utiliser les filtre pour vérifier la saisie dans le formulaire et adapter le message affiché après enregistrement.

Indications : 
    * - Dans un nouveau répertoire, copiez le script **saisie.php** développé dans l'exercice 9.
    * - Définissez un filtre de type expression rationnelle qui permet de vérifier que le prénom et le nom contiennent uniquement des lettres, des espaces et des traits d'union pour une longeur total comprise entre 1 et 40 caractères. En cas d'erreur, le filtre doit retourné **NULL** au lieu de **FALSE**.
    * - Utiliser ce filtre pour vérifier les saisies des champs "Prénom" et "Nom" du formulaire.
    * - Si la saisie est correcte, récupérez les valeurs filtrées pour rensaigner la variable ***$auteur***.
    * - Si la saisie n'est pas correcte, affichez un message du type "Votre saisie n'est pas correcte" sous le formulaire, à la place de l'auter qui est affiché en cas de succès.


## ETAPE 2

Nous souhaitons améliorer la solution précédente et laisser la saisie de l'utilisateur dans les champs du formulaire en cas d'erreur afin qu'il puisse la corriger sans devoir tout ressaisir.

Indications : 
    * - Au début du script, initialisez deux variables ***$premon*** et ***$nom*** avec des chaînes vides.
    * - utilisez ces deux variables pour renseigner la valeur des champs du fomulaire (attribut ***value***).
    * - Si la saisie n'est pas correcte, alimentez les variables ***$premon*** et ***$nom*** avec les valeurs rensaignées par l'utilisateur. Assurez-vous que ces valeurs sont correctement "nettoyées" afin d'être affichées sans risque dans les champs du formulaire (vous pouvez utilisez un filtre **SANITIZE** à cet effet). Si la saisie est correcte, assurez-vous que les champs du formulaire sont vides.
