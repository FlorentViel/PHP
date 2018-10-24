
<?php 



include(__DIR__.'/header.php'); ?>

<main role="main" class="container">
	<h1 class="mt-5">Conjugaison verbe du premier groupe</h1>
</main>

<br/>

<form class ="conjugate" method="GET">
    <label for="verb"><strong>Verbe du premier groupe</strong></label>
    <br/>
    <input type="text" id="verb" name="verb" placeholder="Verbe du 1er groupe" />
    <button>Conjuger</button>
</form>
<br/>

<?php

if(!empty($_GET)) {
$verb = $_GET['verb'];

echo '<div class ="infinitif">';
echo strtoupper('<strong class ="infinitif">' . $verb . '</strong><br/></div>');
//    echo str_replace('�', 'e', $verb);
//    echo str_replace('é', 'e', $verb);


function conjugate($verb)
{   
    $root = substr($verb, 0, -2);   
    $vowels = ['a', 'e', 'é', 'i' , 'o', 'u', 'y'];

    //$ending = substr($verb, -2);
    $subjects= [
        'Je' => 'e',
        'J\'' => 'e',
        'Tu' => 'es',
        'Il / Elle / On' => 'e',
        'Nous' => 'ons',
        'Vous' => 'ez',
        "Ils, Elles" => 'ent'
    ]; 

    if (in_array(substr($verb, 0 , 2), $vowels)){
        unset($subjects['Je']);
    }

    if (substr($root, -1) === 'c'){
        $subjects['Je'] = 'ce';
        $subjects['J\''] = 'ce';
        $subjects['Tu'] = 'ces';
        $subjects['Il / Elle / On'] = 'ce';
        $subjects['Nous'] = 'çons';
        $subjects['Vous'] = 'cez';
        $subjects['Ils, Elles'] = 'cent';

        if (in_array(substr($verb, 0 , 1), $vowels) && substr($root, -1) === 'c'){
            unset($subjects['Je']);
        }
    
        elseif(substr($root, -1) === 'c') {
            unset($subjects['J\'']);
        }

        $root = substr($root, 0, -1);


    }
    if (in_array(substr($verb, 0 , 1), $vowels)){
        unset($subjects['Je']);
    }



    else {
        unset($subjects['J\'']);
    }

    if ($verb == 'aller') {

        $root = null;
        $subjects= [
            'Je' => 'vais',
            'Tu' => 'va',
            'Il / Elle / On' => 'va',
            'Nous' => 'allons',
            'Vous' => 'allez',
            "Ils, Elles" => 'vont'
        ];
        
     
    
    }


    if (substr($root, -1) === 'g'){
        $subjects['Nous'] = 'eons';
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
        echo conjugate($verb);
        echo '</td>' ; ?>
    </tr>
    <br/>
</table>


<?php
}
?>

<?php include(__DIR__.'/footer.php'); ?>
