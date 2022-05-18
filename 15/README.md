#   EXERCICE 15 - Envoyer un courrier électronique  #

Dans cet exercice, nous allons créeer un formulaire permettant d'envoyer un message électronique.

Indications : 
  - Dans un nouveau répertoire, créez un nouveau script PHP **mail.php**.
  - Dans ce nouveau script, saisissez le code HTML permettant d'afficher une page HTML intitulée "Nouveau message" contenant un formulaire constitué de :
      - un input "A" de type texte, de taille 40 et s'appelant name "a"    
      - un input "DE" de type texte, de taille 40 et s'appelant name "de"    
      - un input "Objet" de type texte, de taille 40 et s'appelant name "objet"    
      - un textarea de taille 20 par 80 colonnes et s'appelant name "text"
      - un input "Envoyer" de type submit s'appelant name "ok" 
    L'alignement des champs est obtenue grâce à l'utilisation de CSS appliqué à des balise <label> (le design du formulaire est secondaire pour la réalisation de cet exercice).
  - Ce formulaire sera traité par le script PHP **mail.pphp** lui-même.
  - Au début du script, insérer une section de code PHP qui teste si le script est appelé en traitement du formulaire; si c'est le cas : 
      - récupéez le contenu des champs dans des variables;
      - définissez une variable de type tableau qui va contenir les en-têtes supplémentaires envoyés dans le message;
      - envoyer le message   
            