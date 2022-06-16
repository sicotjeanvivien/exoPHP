# EXERCICE 1 : LE POINT

1) Créez une classe Point qui possède deux attributs x et y correspondant aux coordonées du point. Ces deux attributs/propriétés doivent être affectés par le constructeur.

2) Ajoutez une méthode affiche() qui affiche les coordonnées du point comme ci-dessous (ici, x = 2 et y = 3) :
    Point (2 ,3);

3) Ajoutez une méthode translater(tx,ty) qui ajoute tx à x et ty à y.

# EXERCICE 2 : COMPTE EN BANQUE

1) Créez une classe Compte modélisant un compte en banque. La classe possède deux attributs somme et taux correspondant à la somme placée sur le compte et au taux d'intérêt. Ces deux attributs doivent être affectés par le constructeur.
   
2) Ajoutez une méthode affiche() qui affiche la somme et le taux comme ci-dessous :
    Compte (2000, 2)

3) Ajoutez une méthode depot(x) qui ajoute x à la somme sur le compte.

4) Ajoutez une méthode retrait(x) qui enlève x à la somme sur le compte. Elle pourra renvoyer un erreur si la somme sur le compte devient négative et annuler alors l'opération.

5) Ajoutez une méthode interets() qui calcule les intérêts perçus en un an et les ajoute à la somme placée. Pour rappel les intérets se calculent avec la formule interets = taux x somme / 1003