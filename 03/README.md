#   EXERCICE 3 - Manipiler les données  #

Repartez du  script de l'exercice 2 et apporter les modification suivantes

## Etape 1
 
Pour commencer nous allons afficher un nouveau message donnant la date du jour, simplifier le code compte le nombre de lettres du nom et celui qui détermine si le nom commence par une voyelle.
 
indication :
  - dans un nouveau répertoire copiez les scripts **accueil.php** et **common.inc.php** développés dans l'exercice 2
  - dans le script **accueil.php**, après le message de bienvenu, afficher un nouveau message donnant la date du jour sous la forme "nous somme le ..." avec une date en francais donnant le nom du jour, le numero du jour, le nom du mois et l'année sur quatre chiffres
  - simplifiez le code qui donne le nombre de caractère du nom par une fonction PHP à la place de la boucle
  - simplifiez le code qui détermine si le nom commence par une voyelle ou une consonne en utilisant dans fonctions PHP à la place des structures de contrôle **IF** ou **SWITCH**. Par exemple, vous pouvez définir un tableau( ou une chaîne) qui contient la liste des voyelles et tester si la première lettre du nom est dans le tableau ( ou dans la chaîne ). Créez aussi le cas où le nom ne commence pas par une lettre majuscule comme supposé initialement.
 
## ETAPE 2
 
Nous souhaitons aussi afficher le nombre de voyelles contenues dans le nom en exploitant des expressions rationnelles.
 
Indications :
  - utilisez une expression rationnelle pour trouver le nombre de fois où une voyelle apparaît dans le nom (pensez à gérer correctement la case)
  - affichez un message du type "Votre nom comporte n voyelle"
 
## ETAPE 3
 
Nous souhaitons maintenant afficher des informations supplémentaires relatives aux auteurs
 
Indications :
  - affichez un message du type " Il y a n auteurs dans la liste"
 
## ETAPE 4
 
En complément, nous allons afficher le nom de mon auteur préféré (tiré au sort) sous la forme "nom (prénom)".
 
Indications :
  - tirez au sort le nom d'un auteur à l'aide d'un nombre aléatoire compris entre 0 et le nombre d'auteur moins un (plage des indices dans le tableau)
  - en supposant que le nom de l'auteur est toujour sous la forme "prénom nom ", utilisez un expression rationnelle pour capturer le prénom et le nom, et remplacer le nom initial par le nom sous la forme "nom (prénom)"
  - afficher le message du type "X est mon auteur préféré"
 
## ETAPE 5
 
Pour terminer, nous souhaitons trier différemment  les auteurs et les afficher sous la forme "nom (prénom)"
 
Indications :
  - triez par ordre alphabétique le tableau des auteurs en préservant les clés
  - dans la boucle d'affichage, des auteurs dans la table HTML, en supposant la encore que le nom d'un auteur est toujour sous la forme 'nom prénom', utilisez une autre technique qu'une expression rationnelle pour récupérer le nom et le prénom de l'auteur et afficher le nom sous la forme "nom (prénom".
 
 
 

