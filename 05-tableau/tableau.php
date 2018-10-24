<?php
$eleves = [
    0 => [
        'nom' => 'Matthieu',
        'notes' => [10, 8, 16, 15, 17, 16, 15, 2]
    ],
    1 => [
        'nom' => 'Thomas',
        'notes' => [4, 18, 12, 15, 13, 7]
    ],
    2 => [
        'nom' => 'Jean',
        'notes' => [17, 14, 6, 2, 19, 18, 9]
    ],
    3 => [
        'nom' => 'Enzo',
        'notes' => [1, 14, 6, 2, 19, 8, 10]
    ]
];

//echo $eleves[2]['nom'];

echo '<br /><br />';


foreach($eleves as $eleve)
{   
    echo" ". $eleve['nom'] . " a eu ";
   
    $notesCount = count($eleve['notes']);

    foreach($eleve['notes'] as $key => $note){
        echo $note;
        if ($key === $notesCount - 1 ) {
            echo '. ';
        }

        elseif ($key === $notesCount - 2 ) {
            echo ' et ';
        }

        else {
            echo ', ';
        }
 
    
    
    }

    echo '<br />';
}

$jeanNotes = $eleves[2]['notes'];
$sum = 0;
$notesCount = count($jeanNotes);
foreach ($jeanNotes as $note){
    $sum += $note;
}

//echo round($sum / $notesCount, 2) . '<br/>';
//echo array_sum($jeanNotes) / $notesCount;



$countAverage = 0 ;

foreach($eleves as $eleve)
{ 
    $average = array_sum($eleve['notes']) / count($eleve['notes']);
    echo $eleve['nom'];

    if ($average >= 10){
        echo ' a la moyenne <br/>';
    

        $countAverage++;
    }

    else {
        echo ' n\'a pas la moyenne <br/>';
    }


}

echo 'Nombre d\'élèves avec la moyenne : '.$countAverage;

$bestNote = 0;

foreach ($eleves as $eleve) {
    foreach($eleve['notes'] as $note){
        if ($note > $bestNote){
            $bestNote = $note;
        }
    }
}

var_dump($bestNote);
foreach ($eleves as $eleve) {
    foreach($eleve['notes'] as $note){
        if ($note === $bestNote){
            echo $eleve['nom'] . ' a la meilleure note : ' . $bestNote . '</br>';
            break;
        }
    }
}

$isTwenty = false;

foreach ($eleves as $eleve) {
    foreach($eleve['notes'] as $note){
        if ($note === 20){
            $isTwenty = true;
            break 2;
            var_dump('ici');
        }

    }

    var_dump('là');

}

if ($isTwenty) {
    echo 'Quelqu\'un a eu ' . 20 . '</br>';
}
else{
    echo 'Personne n\'a eu ' . 20;
      
   
    

} 





?>
