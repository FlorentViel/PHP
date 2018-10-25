# Pizza Store PDO SQL

- Récupérer un backup de la BDD pizzastore
L'intéret est de pouvoir recréer la structure de la base à tout moment.

Au niveau du php, on va créer quelques fichiers / dossiers : 
- config/database.php --> Connexion à la base de donnés en PDO , sera inclus dans tous les fichiers PHP 
- partials/header.php -> Le header du site à inclure dans toutes les pages (Bootstrap CDN)
- partias/footer.php -> Le footer du site à inclure dans toutes les pages 
- index.php --> La page d'acceuil du site 
- pizza_list.php --> Lister toutes les pizzas de la base de données 
- pizza_single.php --> La page d'une pizza seule 

Au niveau du front
- assets/ --> Dossier qui contiendra le site le css, le js , les images 


Ajout d'une pizza pizza_add.php

- Créer la page pizza_add.php(Permettra d'ajouter une pizza côté administrateur)
- Ne pas oublier le header et le footer
- Ajouer un titre "Ajouter une pizza" 
- Ajouter un formulaire avec les champs suivants : 
    - Nom : 
    - Prix :
    - Image :
    - Description :
    - Catégorie
- Faire le traitement du formilaire (vérifier les donnés)
- Ajouter la pizza dans la base de données 
- Modifier la base de données pour ajouter le champ description et catégorie dans la table pizza
- Ajouter la pizza dans la base avec une requête