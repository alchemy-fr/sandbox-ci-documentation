

# Documentation utilisateur Databox

---

# Introduction

Phrasea est une solution de Digital Asset Management (DAM) développée par Alchemy, éditeur français basé à Paris, expert du DAM depuis le début des années 90\. Conçue comme l’évolution de Phraseanet (lancée en 2005), Phrasea est une solution DAM robuste, moderne et complète, entièrement réécrite pour répondre aux enjeux actuels de gestion des médias numériques.

Open Source, elle est une alternative souveraine aux plateformes propriétaires pour garantir transparence et indépendance.

API-first, hautement scalable, Phrasea est disponible en mode SaaS, On-premise, et en mode hybride.

Elle offre tout ce qu’on attend d’un DAM: import avec ou sans pré-indexation, indexation manuelle ou automatique, gestion des workflows, outils de collaboration et de partage, publication web, gestion des droits avancés. Elle s’adresse tout particulièrement aux équipes communication et marketing, institutions publiques et collectivités, médias et photographes, IT,…

Les points forts de Phrasea en quelques mots…

* Architecture moderne et API First. Basée sur des microservices: chaque module est isolé, déployable indépendamment. Déploiement Docker/Kubernetes: Le déploiement conteneurisé garantit une installation cohérente, une montée en charge automatique et une maîtrise totale de l’infrastructure.  
* Une des rares solutions disponibles à la fois en SaaS et On-Premise  
* Support professionnel disponible via l’éditeur Alchemy (contrats de maintenance, packs d’heures de support, offres d’hébergement, développements spécifiques, formations,…)  
* Interface moderne, responsive et multilingue.  
* Import massif, rapide et fiable: Gestion de milliers de fichiers sans effort.   
* Recherche puissante avec le moteur Elastic: Full text, recherche à l’aide des facettes, filtres avancés sur tous types de métadonnées, suggestions, tris.  
* Indexation en lot manuelle ou automatique, tags,  
* Outils de collaboration (annotation, chat intégré) et partage des assets  
* Nombreuses intégrations disponibles pour les assets (retouche simple, remove background, détection de texte,…)  
* Versioning des assets, génération de renditions  
* Publication web intégrée avec Phrasea Expose (création de mini sites, intégration CDN, idéal pour partager des assets vers l’extérieur avec ou sans mot de passe, conditions générales d’utilisation, personnalisation des modèles de galeries web,…)  
* Sécurité renforcée: Authentification via Keycloak, SSO, OAuth2, MFA. Contrôle d’accès granulaire (ACL, rôles,…).

1. # Databox

## L’interface 

L’interface de gestion des médias se nomme “Databox”. Elle se divise en plusieurs zones:

* ### La barre latérale

  Sur le côté gauche de la fenêtre de Databox se trouve une barre latérale.  
  Celle-ci est composée de 3 onglets:  
  \-L’arborescence des collections: pour naviguer parmi les Workspaces et Collections disponibles.  
  \-Les facettes: pour filtrer les résultats selon différents critères et être guidé dans sa recherche.  
  \-Les paniers: pour pouvoir regrouper, temporairement ou non, des assets en vue d’une action: édition, export, partage, publication d’une galerie sur un site externe,...

* ### La barre de recherche

	Le haut de la fenêtre présente une barre de recherche.   
	\-Recherche simple: Entrer un ou plusieurs termes pour trouver des assets  
\-Recherche avancée: Entrer une ou plusieurs conditions afin de pouvoir effectuer des recherches dans des champs spécifiques.  
\-Tris: Pour classer les résultats selon ses besoins, et/ou par grandes sections pour un affichage encore plus clair.

* ### La zone d’affichage des résultats

	La zone centrale permet de visualiser tous les assets issus d’une recherche.   
Ceux-ci sont présentés par défaut sous forme de vignettes (deux autres modes d’affichage sont disponibles dans les préférences d’affichage: liste et masonry).

* ### Le menu des actions 

  Le menu principal des actions se situe juste au-dessus de la zone d’affichage des résultats. Il permet d’effectuer de nombreuses actions sur les assets:   
  \-Ajouter des assets à un panier  
  \-Exporter  
  \-Déplacer  
  \-Modifier les attributs  
  \-Dupliquer  
  \-Partager  
  \-Supprimer

  A droite du menu des actions, sur la même ligne, se trouvent les Préférences utilisateur. Elles regroupent les options suivantes: 

- Mode d’affichage des résultats  
- Préférences d’affichage des vues des assets: affichage ou non des titres, des collections, des tags, de l’aperçu au survol  
- Choix de la taille des vignettes,   
- Choix de la taille globale d’affichage et ratio entre l’aperçu et les attributs,   
- Création et gestion des listes personnelles d’attributs


* ### Ajouter des assets

  L’icône **\+** en bas à droite de la fenêtre permet d’ajouter des assets à une collection en parcourant l’arborescence du Workspace.  
    
  D’autres méthodes d’import sont disponibles dans Phrasea: Par exemple, il est également possible d’importer des fichiers depuis la zone latérale en survolant le titre de la collection de destination.  
    
  ---


## Importer

* ### Ajouter des assets

L’ajout d’assets (photos, vidéos, documents audio, PDF, etc.) se fait très facilement dans le DAM. Il existe plusieurs méthodes pour importer des assets dans Phrasea:

1. #### Ajouter des assets depuis l’icône \+

     
* Cliquez sur le bouton **\+** situé en bas à droite dans l’interface. Une fenêtre s’ouvre.  
* Sélectionnez des fichiers ou effectuez un glisser-déposer dans la fenêtre.   
* Choisissez un Workspace s’il y en a plusieurs, ainsi que la collection de destination.   
* Sélectionnez la confidentialité des documents (Public, Private ou Secret).   
* Validez le transfert en cliquant sur le bouton “Ajouter”.

2. #### Ajouter des assets directement depuis une collection

Dans la barre latérale:

* Parcourez l’arborescence et choisissez votre collection de destination pour ces nouveaux assets.  
* Au survol du titre de la collection, l’icône **. . .** apparaît. Cliquez dessus.  
* Sélectionnez “Ajouter un nouvel asset à la collection”.  
* La démarche d’après reste la même que précédemment évoquée.

3. #### Glisser-déposer des documents dans Databox

Un simple glisser-déposer n’importe où sur la fenêtre permet d’ouvrir la fenêtre d’import. Les documents sont en place pour l’ajout, il ne reste qu’à sélectionner une collection de destination et appliquer le même procédé que précédemment.

4. #### Utiliser Phrasea Uploader

   

Hormis l’import dans Databox, il est possible d’utiliser Phrasea Uploader.  
Phrasea Uploader est une application dédiée à l’import de fichiers.  
\-Import à partir de n’importe quel appareil (téléphone, tablette, desktop)  
\-Volumes de fichiers importants  
\-Construction de formulaires de pré-indexation   
\-Canaux d’entrée personnalisables  
\-Imports automatisés (récupération des médias à partir d’autres applications)

* ### Ajout avec pré-indexation 

Pré-indexez vos contenus durant l’import. Au lieu de directement cliquer sur le bouton “Importer” après avoir chargé vos assets, remplissez le formulaire qui vous est présenté.   
Un formulaire permet de remplir les informations dans les différents attributs qui ont été configurés: titre, description, mots-clés, crédit, tags, etc.  
A partir de cette même fenêtre, il est possible d’effectuer la pré-indexation dans plusieurs langues simultanément. 

* ### Utilisation de modèles à l’import

Les modèles de pré-indexation permettent de pré-remplir automatiquement les métadonnées lors de l’import des assets. Ils accélèrent le travail des utilisateurs tout en assurant une cohérence documentaire. Moins de saisie, c’est également moins d’erreurs ou risques d’oublis.

Pour créer un modèle:

* Remplir les attributs, les tags, etc. sur des assets sélectionnés pour l’import, puis  cocher la case dans le formulaire d’import: “Enregistrer les valeurs comme modèle pour réutilisation”.   
* Donner un nom au modèle.   
* Remplir les options disponibles au sein d’un modèle:

\-Remplacer ou non un modèle qui a été appliqué  
\-Appliquer ou non à la collection  
\-Inclure ou non les sous-collections  
\-Inclure ou non les attributs  
\-Inclure ou non la confidentialité  
\-Inclure ou non les tags  
\-Rendre le modèle Public ou bien seulement disponible à l’usage de l’utilisateur qui l’a créé.

* Cliquer sur le bouton “Ajouter” pour transférer les assets.  
* Au prochain import, le modèle apparaît dans la liste déroulante du champ en haut du formulaire “Remplir avec modèle”.

Bon à savoir:  
\>Les utilisateurs créent ainsi des modèles adaptés à différents usages, qui peuvent être partagés si besoin.  
\>Les modèles peuvent être cumulés. 

---

## Rechercher

* ### La recherche: Introduction

Le moteur de recherche utilisé par Phrasea est Elastic   
[https://www.elastic.co/](https://www.elastic.co/)   
Elasticsearch est une solution open source, distribuée, conçue pour la recherche et les moteurs d’analyse, optimisée pour la vitesse, la montée en charge et les applications IA. En tant que plateforme de récupération, elle stocke en temps réel des données structurées, non structurées et vectorielles — offrant une recherche hybride et vectorielle rapide, alimentant l’observabilité et la sécurité, et permettant aux applications pilotées par l’IA d’atteindre de hautes performances, une précision optimale et une grande pertinence.

Elasticsearch permet entre autres de: 

- rechercher des documents en texte libre, par mots exacts, ou expressions précises.  
- rechercher dans plusieurs champs à la fois,   
- combiner de nombreux critères (conditions),  
- faire des recherches floues,   
- rechercher avec des plages de valeurs (dates, nombres).   
- Enfin, l’ajustement de la pertinence des résultats grâce à des fonctions de scoring personnalisées.

Ces méthodes de recherche avec Elastic sont nombreuses et détaillées ici sur le site Elastic [https://www.elastic.co/docs/explore-analyze/query-filter](https://www.elastic.co/docs/explore-analyze/query-filter) 

* ### La recherche simple

Dans Databox, la barre de recherche se trouve au-dessus de l’affichage des résultats.  
Placer le curseur dans la barre de recherche et saisir un terme. 

La fonctionnalité des “Suggestions de recherche” permet de proposer des termes à l’utilisateur pour l’orienter dans sa recherche. Vous évitez aussi de passer à côté d’informations importantes.

Les résultats s’affichent par défaut sous forme de grille (vignettes).

Dans Phrasea, il existe une fonctionnalité de surlignage automatique des termes dans les métadonnées. Lorsqu’un utilisateur effectue une recherche, les termes correspondants sont visuellement mis en évidence, ce qui facilite l’identification rapide des informations pertinentes. Cette fonction est active et s’applique à tous les attributs indexés.   
Dans le cas particulier d’attributs multivalués, c'est le terme strict qui est pris en compte.

* ### La recherche à l’aide des facettes 

La recherche avec facettes peut être vue comme une cartographie de la recherche.   
Après l’avoir lancée, les facettes créent une sorte de plan des résultats en les répartissant selon différents critères comme la date, la catégorie, le lieu ou encore le type de document.  
Chaque facette représente un chemin potentiel à explorer pour affiner et orienter la recherche de manière plus précise. 

- Naviguer via les facettes

Cliquer sur l’onglet “Facettes” présent dans la barre latérale.  
Pour chaque facette, cochez les valeurs qui vous intéressent afin d’affiner progressivement la recherche.   
Exemple: choix d’un intervalle de date, de mots-clés, de tags, pays, ville, crédit,... 

- Cumuler ou exclure des facettes

Le cumul ou l’exclusion de facettes permet d’élargir ou de réduire la portée de la recherche.   
Cela vous garantit d’atteindre l’information exacte plus efficacement.

Après avoir sélectionné une valeur d’une facette (par exemple: le tag “Nouveau”), cliquez sur le menu ( **. . .**)  de la valeur. Plusieurs choix vous sont proposés:  
\-Disable (désactiver): pour exclure cette valeur de la recherche. Tous les assets avec les tags sauf le tag “Nouveau” seront affichés.   
\-Enable (activer): lorsque vous avez exclu une valeur de la recherche. La facette sera alors réactivée.   
\-Edit (modifier): pour modifier une condition (voir “recherche avancée” plus bas).  
\-Remove (retirer): pour retirer cette facette de votre recherche

- Configurer les facettes à afficher

Vous pouvez choisir les facettes qui s’affichent dans la barre latérale.   
Pour configurer les facettes, vous devez posséder les droits de gestion du Workspace.  
Rendez-vous dans l’édition du Workspace, cliquez sur l’onglet “Attributs” et pour chaque attribut, décidez de cocher (ou non) la case “Facettes”.

* ### Recherche avancée

La recherche avancée vous permet de retrouver rapidement des assets en combinant plusieurs critères et notamment, effectuer des recherches sur des attributs spécifiques. Cliquer sur l’icône en forme d’entonnoir pour ouvrir la recherche avancée.

- Ajouter des conditions

Cliquer sur “Ajouter une condition (“Add condition”).

C’est à partir de cette fenêtre que les conditions doivent être ajoutées:

\-Sélection d’un champ dans lequel effectuer la recherche:   
\- Soit un champ dit technique (collection, dates, taille ou type de fichier, tags, etc)  
\- Soit parmi vos attributs (champ crédit, titre, légende, pays, ville, mots clés, etc.)

\-Sélection de l’opérateur  
Après avoir choisi le champ, choisir l’opérateur ( “commence avec”, “existe”, “contient”, “est égal à”,…: ces opérateurs changent en fonction de la condition choisie)/

\-Sélection de la valeur  
Pour finir, entrer une valeur: un terme, une date, etc.

Vous pouvez ensuite lancer la recherche en cliquant sur le bouton “Add”, ou bien ajouter une ou plusieurs autres conditions, ainsi qu’un ou plusieurs groupes de conditions pour combiner les filtres de recherche sur des champs spécifiques.

* ### Les tris

Vous pouvez trier et grouper les résultats de vos recherches: Tri par date de création, date de modification, par tags ou encore attributs.  
En regroupant les résultats par grandes sections, vous obtenez un affichage adapté à vos besoins.

Exemple: Un tri sur l’attribut “Pays” placé en 1ère position, puis on ajoute la ville. Décocher les attributs non souhaités et remonter ces deux éléments en premier, par glisser-déposer.

Les résultats sont affichés d’abord par pays, puis par villes.

Cocher “Grouper par sections” pour l’ajout de séparateurs de groupes dans la présentation des résultats. Cliquer sur le bouton “Appliquer”.  
Les résultats sont affichés d’abord par pays, puis par villes, séparés par grandes sections.

