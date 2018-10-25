<?php
$currentPageTitle = "Nos pizzas";
// Le fichier header.php est inclus sur la page
require_once(__DIR__.'/partials/header.php');

// Récupérer la liste des pizzas
$query = $db->query('SELECT * FROM pizza');
$pizzas = $query->fetchall();

$price = '13.00';
$price = str_replace('.' , ',', $price);
$explodePrice = explode(',', $price);
//echo $explodePrice[0]. ', <span style ="font-size: 12px">'. $explodePrice[1]. '</span>';



//$price = '13.00';
//$first = substr($price, 0, -2); // 13
//$cents = substr($price, -2); // 00
//echo $first.',<span style ="font-size: 12px">' . $cents . '</span>';
?>

<br/>

<main class="container">
	<h1 class ="page-title">Liste des pizzas</h1>

	<div class="row">
	<?php 
	// On affiche les pizzas
	foreach ($pizzas as $pizza ){?>

		<div class="col-md-3">
			<div class="card mb-4">
				<div class="card-img-top-container"/*>
				<figure class ="figure">
					<img class="card-img-top card-img-zoom-effect card-img-top-px" src="<?php echo $pizza['image']; ?>" alt=" <?php echo $pizza['name']; ?>"/>
					<figcaption class ="card-price"><?php echo formatPrice($pizza['price']); ?> </figcaption>
				</figure>
				</div>
					<h5><?php echo $pizza['name']; ?></h5>
					<div class="card-body">
					<?php echo '<a href="pizza_single.php?id='.$pizza['id'].'"  class="btn btn-danger">Commandez</a>' ?>
				</div>
			</div>
		</div>
	

	<?php } ?>
	</div>
</main>


<?php include(__DIR__.'/partials/footer.php'); ?>
