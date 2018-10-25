<?php require_once(__DIR__.'/partials/header.php');

$id = $_GET['id'] ? $_GET['id']: 0;


if (is_numeric($id)){
echo 'SELECT * FROM pizza WHERE id = "' . $id . '"; </br> ';
$query = $db->query('SELECT * FROM pizza WHERE id = '.$id);

// On vérifie que la pizza existe
$pizzas = $query->fetch();

}


?>

<br/>

<main role="main" class="container">
	<h1 class="mt-5">Pizza <?php echo $pizzas['name']; ?></h1>





<?php include(__DIR__.'/partials/footer.php'); ?>
