<?php 

$id = isset($_GET['id']) ? $_GET['id'] : 0;

// Inclus la base de données

require_once(__DIR__.'/config/database.php');

$currentPageTitle ='Nos pizzas';

$query = $db->prepare('SELECT * FROM pizza WHERE id = :id'); // :id est un paramètre
$query->bindValue(':id', $id , PDO::PARAM_INT); // On assure que 'lid est bien un entier
$query->execute(); // Excute la requête
$pizza = $query->fetch();

// Renvoyer une 404 si la pizza n'existe pas
if ($pizza === false){
http_response_code(404);
	// On pourrait aussi rediriger l'utilisateur vers la liste des pizzas
	// deader ('Location : pizza_list.php');
	require_once(__DIR__.'/partials/header.php'); ?>
	<br/>
	<h1>404. Redirection dans 5 secondes</h1>
	<script>
		setTimeout(function() {
			window.location = 'pizza_list.php';
		}, 5000);
	</script>
<?php	require_once(__DIR__.'/partials/footer.php');
	die();
}


// Le fichier header.php est inbclus sur la page
require_once(__DIR__.'/partials/header.php');

?>

<br/>

<main class="container">
	<div class ="row">
		<div class="col-md-6">
			<figure class ="figure">
				<img class="img-fluid card-img-top-px" src="<?php echo $pizza['image']; ?>" alt=" <?php echo $pizza['name']; ?>"/>
				<figcaption class ="card-price"><?php echo formatPrice($pizza['price']); ?> </figcaption>
			   </figure>
		</div>
		<div class="col-md-6">
			<h1><?php echo $pizza['name']; ?></h1>
		</div>
	</div>
</main>







<?php include(__DIR__.'/partials/footer.php'); ?>
