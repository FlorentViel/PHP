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