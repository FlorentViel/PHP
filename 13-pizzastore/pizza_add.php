<?php

$name = null;
$price = null;
$image = null;
$description = null;
$size = null;
$errors = [];
$ifValid = true;

	$pizza = $_POST['name'];
    $price = $_POST['price'];
	$image = $_POST['image'];
	$description = $_POST['image'];
	$size = $_POST['size'];

	if (empty($pizza)){
        $errors['pizza'] = 'Le nom est vide' . '</br>';
        exit('Cet email est vide. </br>');
    }

    if(strlen($price) == 0){
        $isValid == false;
        exit ("L'objet est vide ");
    }

    if(strlen($image) == 0) {
        $isValid == false;
        exit ("Envoyez une image");
	}
	
	if(strlen($description) == 10) {
        $isValid == false;
        exit ("10 caractères minimum ");
	}

	if(strlen($size) == 0){
        $isValid == false;
        exit ("L'objet est vide ");
    }
	
	


   

    //if($isValid == true){
    //echo 'Envoie du mail';
    //}

	

// Inclus la base de données

require_once(__DIR__.'/config/database.php');

//var_dump($db);

$currentPageTitle = "Ajoutez une pizza";
// Le fichier header.php est inclus sur la page
require_once(__DIR__.'/partials/header.php');
?>


<br/>
<br/>
<br/>

<form method="POST" action="">
    <p>
        <label for="pseudo">Nom de pizza :</label>
        <input type="text" name="pizza" id="pizza" placeholder="Nom de pizza" size="30" maxlength="10" />
    </p>

	<p>
        <label for="pseudo">Prix:</label>
        <input type="text" name="price" id="price" placeholder="Prix" size="30" maxlength="10" />
    </p>

	<p>
        <label for="pseudo">Image :</label>
        <input type="text" name="image" id="image" placeholder="image" size="30" maxlength="10" />
    </p>

	<p>
        <label for="pseudo">Description:</label>
        <input type="text" name="description" id="description" placeholder="description" size="30" maxlength="10" />
    </p>

	<p>
        <label for="pseudo">Catégorie:</label>
        <input type="text" name="size" id="size" placeholder="Ex : Zozor" size="30" maxlength="10" />
    </p>

	<button>Ajoutez pizza</button>
</form>

<?php 

echo "  " . $name . '<br/>';
echo "  " . $price . '<br/>';
echo "  " . $description . '<br/>';
echo "  " . $image . '<br/>';
echo "  " . $size . '<br/>';

// INSERT INTO user SET firstname = $name, $price  = 'Doe', email = 'john.doe@mail.com';



?>

<?php require_once(__DIR__.'/partials/footer.php'); ?>


