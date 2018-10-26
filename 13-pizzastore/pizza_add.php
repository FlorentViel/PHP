<?php
$currentPageTitle = 'Ajouter une pizza';
// Le fichier header.php est inclus sur la page
require_once(__DIR__.'/partials/header.php');
// Traitement du formulaire
$name = $price = $image = $category = $description = null;
// le formulaire est soumis
if (!empty($_POST)) {
    $name = $_POST['name'];
    $price = str_replace(',', '.', $_POST['price']); // on remplace la , par un . pour le prix
    $image = $_FILES['image'];
    /*$image = $_FILES['image']['name'];    //Le nom original du fichier, comme sur le disque du visiteur (exemple : mon_icone.png).
    $image = $_FILES['image']['type'];//Le type du fichier. Par exemple, cela peut être « image/png ».
    $image = $_FILES['image']['size'];     //La taille du fichier en octets.
    $image = $_FILES['image']['tmp_name']; //L'adresse vers le fichier uploadé dans le répertoire temporaire.
    $image = $_FILES['image']['error'];  //Le code d'erreur, qui permet de savoir si le fichier a bien été uploadé.
    */

    //var_dump($_FILES);

    $category = $_POST['category'];
    $description = $_POST['description'];
    // Raccourci avec l'interpolation de variables
    // ${'variable'} = 'valeur';
    // $key = 'variable';
    // ${$key} = 'valeur';
    // foreach ($_POST as $key => $field) {
    //  $key = $field;
    // }
    
    // Définir un tableau d'erreur vide qui va se remplir après chaque erreur
    $errors = [];
    // Vérifier le name
    if (empty($name)) {
        $errors['name'] = 'Le nom n\'est pas valide';
    }
    // Vérifier le price
    if (!is_numeric($price) || $price < 5 || $price > 19.99) {
        $errors['price'] = 'Le prix n\'est pas valide';
    }
    // Vérifier l'image

    if ($image['error'] === 4) {
        $errors['image'] = 'L\'image n\'est pas valide';
    }
    // Vérifier la catégorie
    if (empty($category) || !in_array($category, ['Classique', 'Spicy', 'Hot', 'Végétarienne'])) {
        $errors['category'] = 'La catégorie n\'est pas valide';
    }
    // Vérifier la description
    if (empty($description)) {
        $errors['description'] = 'La description n\'est pas valide';
    }

    // Upload de l'image
    //if (empty($errors)){
        var_dump($image);
        $file = $image['tmp_name']; // Emplacement du fichier temporaire
        $finfo = finfo_open(FILEINFO_MIME_TYPE);
        $mimeType = finfo_file($finfo, $file); 
        $allowedExtension = ['image/jpg', 'image/jpeg', 'image/gif', 'image/png'];
        $fileName = 'assets/img/pizzas/'.$image['name'];
        if (!in_array($mimeType, $allowedExtension)){
            $errors['image'] = 'Ce type de fichier n\'est pas autorisé';
        }
    //}

        // Vérifier la taille du fichier
        // Le 30 est défini en Ko
        if ($image['size'] / 9004 > 250) {
            $errors['image'] = 'L\'image est trop lourde';
        }


        if(!isset($errors['image'])){
            move_uploaded_file($file,__DIR__.'/'.$fileName); // On déplace le fichier uploadé o* on le souhaite
        }


    // S'il n'y a pas d'erreurs dans le formulaire
    if (empty($errors)) {
        $query = $db->prepare('
            INSERT INTO pizza (`name`, `price`, `image`, `category`, `description`) VALUES (:name, :price, :image, :category, :description)
        ');
        $query->bindValue(':name', $name, PDO::PARAM_STR);
        $query->bindValue(':price', $price, PDO::PARAM_STR);
        $query->bindValue(':image', $fileName, PDO::PARAM_STR);
        $query->bindValue(':category', $category, PDO::PARAM_STR);
        $query->bindValue(':description', $description, PDO::PARAM_STR);
        if ($query->execute()) { // On insère la pizza dans la BDD
            $success = true;
            // Envoyer un mail ?
            // Logger la création de la pizza
        }
    }
}
?>

<br/>

<main class="container">
    <h1 class="page-title">Ajouter une pizza</h1>

    <?php if (isset($success) && $success) { ?>
        <div class="alert alert-success alert-dismissible fade show">
            La pizza <strong><?php echo $name; ?></strong> a bien été ajouté avec l'id <strong><?php echo $db->lastInsertId(); ?></strong> !
            <button type="button" class="close" data-dismiss="alert">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php } ?>
    
    <form method="POST" enctype="multipart/form-data">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="name">Nom :</label>
                    <input type="text" name="name" id="name" class="form-control <?php echo isset($errors['name']) ? 'is-invalid' : null; ?>" value="<?php echo $name; ?>">
                    <?php if (isset($errors['name'])) {
                        echo '<div class="invalid-feedback">';
                            echo $errors['name'];
                        echo '</div>';
                    } ?>
                </div>
                <div class="form-group">
                    <label for="price">Prix :</label>
                    <input type="text" name="price" id="price" class="form-control <?php echo isset($errors['price']) ? 'is-invalid' : null; ?>" value="<?php echo $price; ?>">
                    <?php if (isset($errors['price'])) {
                        echo '<div class="invalid-feedback">';
                            echo $errors['price'];
                        echo '</div>';
                    } ?>
                </div>
                <div class="form-group">
                    <label for="image">Image :</label>
                    <input type="hidden" name="MAX_FILE_SIZE" value="1048576" />
                    <input type="file" name="image" id="image" class="form-control <?php echo isset($errors['image']) ? 'is-invalid' : null; ?>">
                    <?php if (isset($errors['image'])) {
                        echo '<div class="invalid-feedback">';
                            echo $errors['image'];
                        echo '</div>';
                    } ?>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="category">Catégorie :</label>
                    <select name="category" id="category" class="form-control <?php echo isset($errors['category']) ? 'is-invalid' : null; ?>">
                        <option value="">Choisir la catégorie</option>
                        <option <?php echo ($category === 'Classique') ? 'selected' : ''; ?> value="Classique">Classique</option>
                        <option <?php echo ($category === 'Spicy') ? 'selected' : ''; ?> value="Spicy">Spicy</option>
                        <option <?php echo ($category === 'Hot') ? 'selected' : ''; ?> value="Hot">Hot</option>
                        <option <?php echo ($category === 'Végétarienne') ? 'selected' : ''; ?> value="Végétarienne">Végétarienne</option>
                    </select>
                    <?php if (isset($errors['category'])) {
                        echo '<div class="invalid-feedback">';
                            echo $errors['category'];
                        echo '</div>';
                    } ?>
                </div>
                <div class="form-group">
                    <label for="description">Description :</label>
                    <textarea name="description" id="description" rows="5" class="form-control <?php echo isset($errors['description']) ? 'is-invalid' : null; ?>"><?php echo $description; ?></textarea>
                    <?php if (isset($errors['description'])) {
                        echo '<div class="invalid-feedback">';
                            echo $errors['description'];
                        echo '</div>';
                    } ?>
                </div>
            </div>
        </div>
        <div class="text-center">
            <button class="btn btn-lg btn-block btn-danger text-uppercase font-weight-bold">Ajouter</button>
        </div>
    </form>
</main>

<?php
// Le fichier footer.php est inclus sur la page
require_once(__DIR__.'/partials/footer.php'); ?>