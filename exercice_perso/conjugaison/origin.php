
<form method="GET">
    <label for="verb">Verbe du premier groupe</label>
    <input type="text" id="verb" name="verb" placeholder="Verbe du 1er groupe" />
    <label for="verb2">Verbe du deuxième groupe</label>
    <input type="text" id="verb2" name="verb2" placeholder="Verbe du 2iem groupe" />
    <button>Envoyer</button>
</form>


<?php






if(!empty($_GET)) {
$verb = $_GET['verb'];
$verb2 = $_GET['verb2'];

echo strtoupper('<strong>' . $verb . '</strong><br/>');





function conjugate($verb)
{   
    $root = substr($verb, 0, -2);   
    $vowels = ['a', 'e', "é", 'i' , 'o', 'u', 'y'];
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

        if (in_array(substr($verb, 0 , 2), $vowels) && substr($root, -1) === 'c'){
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


echo conjugate($verb);

echo '<br/>';


}

echo strtoupper('<strong>' . $verb2 . '</strong><br/>');


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

echo conjugate2($verb2);



?>
