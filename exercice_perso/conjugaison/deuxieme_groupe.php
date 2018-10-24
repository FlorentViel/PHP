



<?php 



include(__DIR__.'/header.php'); ?>

<main role="main" class="container">
	<h1 class="mt-5">Conjugaison verbe du deuxième groupe</h1>
</main>

<br/>

<form class ="conjugate" method="GET">
    <label for="verb2"><strong>Verbe du deuxième groupe</strong></label>
    <br/>
    <input type="text" id="verb2" name="verb2" placeholder="Verbe du 2ieme groupe" />
    <button>Conjuger</button>
</form>

<br/>

<?php

if(!empty($_GET)) {
$verb2 = $_GET['verb2'];

echo '<div class ="infinitif">';
echo strtoupper('<strong class="infinitif">' . $verb2 . '</strong><br/></div>');


function conjugate2($verb2)
{   
    $root = substr($verb2, 0, -2);   
    //$ending = substr($verb2, -2);
    $vowels = ['a', 'e', 'i' , 'o', 'u', 'y'];
    $subjects= [
        'Je' => 'is',
        'J\'' => 'is',
        'Tu' => 'is',
        'Il / Elle / On' => 'it',
        'Nous' => 'issons',
        'Vous' => 'issez',
        "Ils, Elles" => 'issent'
    ]; 


    if (in_array(substr($verb2, 0 , 1), $vowels)){
        unset($subjects['Je']);
    }

    else {
        unset($subjects['J\'']);
    }



    $output = '' ;
    foreach($subjects as $subject => $ending){
        $output .= $subject . ' ' . $root . $ending . '<br/>';

    }
        
    return $output;


}

?>


<table class = "table-verbe">
    <tr>
        <?php echo'<td>' ;
        echo conjugate2($verb2);
        echo'<td>' ;?>
    </tr>
    <br/>
</table>

<?php
}
?>

<?php include(__DIR__.'/footer.php'); ?>


</body>
</html>
