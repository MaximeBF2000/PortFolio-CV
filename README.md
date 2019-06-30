# Projet Techweb : Réaliser un CV web

## Objectif du projet
A une époque fortement concurrentielle dans les milieux professionnels, un banal CV papier ne permet parfois plus de démontrer sa valeur et son originalité. C’est pourquoi, plus encore pour une personne dans le secteur du numérique, avoir un site internet représentant sa personne peut être un bon avantage et permettre de mieux présenter la personne que l’on est. L’objectif de ce projet est donc de développer un CV web, permettant de démontrer ces compétences en développement web, en créant un site dynamique directement relié à une base de données.


## Plan de réalisation du site
Pour la création de notre site, il nous faut une organisation bien définie de chaque action à réaliser. Ci-dessous sera donc présenté mon organisation lors de la création d’un site web :
-	Création d’un schéma du site (adobeXD) + schéma de base de données Merise
-	Réalisation de la maquette en HTML / CSS
-	Ajout des modules en Javascript
-	Création de la base de données sur MySQL
-	Ajout du dynamisme sur le site avec PHP et SQL
-	Création d’une partie admin en PHP

## Cependant, étant dans le cadre d’une formation, l’organisation que j’ai utilisé pour la création de ce cv est légèrement différentes du aux contraintes de planning de l’apprentissage ainsi que des difficultés que j’ai rencontrées, ci-dessous sera donc présenté cette organisation.
-	Création d’un site statique en HTML (modèle 1)
-	Ajout de modules en javascript
-	Création du schéma Merise
-	Réalisation du schéma adobeXD
-	Création d’une nouvelle version de site statique (design amélioré)
-	Ajout des nouveaux modules en javascript
-	Création d’une base de données MySQL
-	Ajout du dynamisme en PHP
-	Création d’une section admin en PHP

## Frontend : Ergonomie et expérience utilisateur

Le CV est composé essentiellement d’une couleur primaire et d’une couleur secondaire.
-	Couleur primaire : #0e0e88 (   , darkblue)
-	Couleur secondaire : white

D’après la théorie des couleurs et des émotions, la couleur bleue transmet une image de rigueur, qui est idéal pour un cv.


Niveau technologie, l’objectif fut de rester le plus possible sur des technologies frontend natives, c’est pourquoi les seules frameworks utilisés ici sont fontawesome pour avoir des icônes qui exprime graphiquement un texte et permette donc une lecture générale rapide du site, et bootstrap pour la partie administrateur (qui n’est donc jamais vu par l’utilisateur).

Un CV étant basiquement un document étant fait pour être lu et non pour intéragir avec, j’ai choisi d’implémenter essentiellement des modules javascript qui dynamise le design du site
(par exemple, une écriture automatique, un effet de fade lors du scroll, ou encore un slider), ainsi qu’un module qui simplifie le parcours utilisateur sur le site (side-navbar dynamique).

Enfin, le parcours utilisateurs à été pensé pour que celui-ci arrive sur un formulaire de contact au moment où il possède toutes les informations, permettant par exemple à un employeur de pouvoir directement faire un appel d’offre.


 
## Backend : Dynamisation du site et gestion d’une base de données

Le CV a été conçu de manière à pouvoir devenir une template pour n’importe qui. En effet, chaque information étant lié à ma personne (photo, nom, compétences…) ne sont que des données de la bdd. En changeant les données depuis l’interface admin (présentée plus tard), n’importe qui peut créer son CV basé sur la template que j’ai créé. C’est un script PHP qui s’exécute côté serveur qui va chercher les données dans la bdd, et qui va générer dynamiquement une page HTML en fonction de ces données.

De plus, notre base de données va également stocker les informations que les utilisateurs envoient lorsqu’ils utilisent le formulaire de contact. 
En effet, le formulaire utilise ici swiftmailer, un module du framework PHP Symphony, qui permet d’aller chercher les messages de notre base de données lorsqu’ils sont ajoutés et de les envoyées directement par mail à mon adresse maxime.bounaas@gmail.com .



## CMS : La finalité par la gestion de bdd

Enfin, maintenant que le CV est opérationnel, généré dynamiquement via une base de données avec une template optimisée pour le référencement naturel et le chemin utilisateurs, la dernière étape est de permettre à un débutant de modifier cette base de données, sans avoir aucune connaissance préalable en bdd MySQL.
Pour cela, on créer une interface administrateur qui sera composée de formulaire permettant de mettre à jour la base de données, ajouter de nouvelles informations ou bien supprimer des informations existantes. C’est interface est protégée par une page de login qui demande des identifiants administrateur. 
