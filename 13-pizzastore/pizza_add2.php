<?php

// Inclus la base de données

require_once(__DIR__.'/config/database.php');


$pizza = null;
$price = null;
$image = null;
$description = null;
$category = null;
$errors = [];
$reponse = "e";


//var_dump($db);

$currentPageTitle = "Ajoutez une pizza";
// Le fichier header.php est inclus sur la page
require_once(__DIR__.'/partials/header.php');
?>


<br/>
<br/>
<br/>

<form method="POST" action="pizza_add.php">
    <p>
        <label for="pseudo">Nom de pizza :</label>
        <input type="text" name="pizza" id="pizza" placeholder="Nom de pizza" size="30" maxlength="50" />
    </p>

	<p>
        <label for="pseudo">Prix:</label>
        <input type="text" name="price" id="price" placeholder="Prix" size="30" maxlength="20" />
    </p>

	<p>
        <label for="pseudo">Image :</label>
        <input type="text" name="image" id="image" placeholder="image" size="30" maxlength="255" />
    </p>

	<p>
        <label for="pseudo">Description:</label>
		<textarea name="description" form="usrform" maxlength="255" size="250">Enter text here...</textarea>
    </p>

	<p>
        <label for="pseudo">Catégorie:</label>
        <input type="text" name="category" id="category" placeholder="Catégorie" size="30" maxlength="10" />
    </p>

	<button>Ajoutez pizza</button>
</form>

<?php 

if (!empty($_POST)) { // Récupére les informations saisies dans le formulaire


	$pizza = $_POST['pizza'];
    $price = $_POST['price'];
	$image = $_POST['image'];
	$description = $_POST['image'];
	$size = $_POST['size'];

	if (empty($pizza)){
        $errors['pizza'] = 'Le nom est vide' . '</br>';
        echo('Cet email est vide. </br>');
	}
	
	if (!is_numeric($price) || $price < 5 || $price > 19.99){
		$errors['price'] = 'Le prix n\'est pas valide ';
	}


    if(strlen($image) == 0) {
        $reponse == false;
        echo ("Envoyez une image" . '</br>');
	}
	
	if(strlen($description) == 10) {
        $reponse== false;
        echo ("10 caractères minimum " . '</br>');
	}

	if(strlen($category) == 0){
        $reponse == false;
        echo ("L'objet est vide " . '</br>');
    }
	
	
    if($reponse = "e"){
	//	$db->query->prepared INSERT INTO pizza (name, price, image) VALUES (:name, price, pizza);

	$db->query("INSERT INTO pizza SET name = '$pizza', price = '$price' , image = '$image'");

	$query->bindValue(':name', $name, PDO::PARAM_STR);
	$query->bindValue(':price', $price, PDO::PARAM_STR);
	$query->bindValue(':image', $image, PDO::PARAM_STR);


	}
}	






?>

<?php require_once(__DIR__.'/partials/footer.php'); ?>


