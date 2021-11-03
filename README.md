# Jeu_PHP
Projet effectué par : 
Amin, Gabriel, Raphaël, Dorian, Eduardo, Basil, Wylohn


# Avancée projet
Projet refactorisé et hiérarchisé (suite à la présentation de Vendredi les class ont été renommées et le maximum de code procédural a été placé en méthodes de class)

30/10/2021 :
La page de jeu play.php n'est pas fonctionnelle. Les méthodes d'attaques / d'insert / de select des personnages sont existantes et fonctionnelles. La structure, l'appel et la récupération des data vers la page play.php permettant de jouer au jeu n'a pas été faite.
Le point d'honneur a été mis sur la compréhension totale des éléments utiliser (wink wink hydrate) et sur l'écriture d'un code le plus propre et réutilisable possible, tout en asismilant les bonnes pratiques pour être à même de les réutiliser par la suite convenablement.

1 difficulté a été rencontrée au dernier moment, page index.php pour les boutons d'actions renvoyant vers "Jouer" play.php et "Supprimer" confirmationDeletePerso.php. Nous n'avons pas passés correctement l'id d'un Perso dans le bouton pour soit le sélectionner et le jouer / soit le supprimer. Ce qui est renvoyé est de l'ordre $_GET[valueID] = "Supprimer" au lieu de $_GET['id'] = valueID.


# Setup du projet
Via PHPStorm ou VS, aucune différence, tout est dans la stack via docker.
Bien veiller à ce que l'host se trouvant dans DataBase.php et le nom du container dans docker-compose pour la database est le même 'db'.
En cas de différence, l'erreur no such file or directory sera retournée.

## Question Docker-compose
Est-il possible de demander à docker, après l'instanciation du container phpmyadmin, d'y installer une DB via un fichier .sql ?

# Ressources pour Docker sur Windows (problème sur le Kernel Linux)
https://docs.microsoft.com/en-us/windows/wsl/install-manual#step-4---download-the-linux-kernel-update-package (cc. Dorian)
