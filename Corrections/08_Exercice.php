<?php

// Calculer la moyenne des valeurs suivantes, pensez à les ranger dans un tableau associatif 
/*
Alan 13
Sandrine 17
Claire 18
Romain 14
Antoine 13
Sophie 18.5
*/

$students = [
    'Alan' => 13, // key => value 
    'Sandrine' => 17,
    'Claire' => 18,
    'Romain' => 14,
    'Antoine' => 13,
    'Sophie' => 18.5
];


// accéder à la valeur dont la clé est Sandrine
$sum = array_sum($students );
$nb = count($students);

$average_brut = $sum / $nb ;
$average_round = round( $sum / $nb, 1);

echo "<p>Moyenne brut $average_brut , moyenne arrondi : $average_round  </p>";