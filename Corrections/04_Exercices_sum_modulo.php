<?php


/**
 * 04
 * 
 * 1. Générez un tableau de 10 valeurs entières à l'aide de la fonction range de PHP, puis faites la somme des valeurs pairs.
 * 
 * 2. Additionnez les valeurs impairs de ce tableau
 * 
 * 3. Faites une fonction pour les points 1 et 2 pour généraliser.
 * 
 */

 $nums = range(0, 9);
 $paire_acc = 0;
 $impaire_acc = 0;
 for($i = 0; $i < count($nums); $i++) {
    if($nums[$i] % 2 == 0) {
        $paire_acc += $nums[$i];
    } else {
        $impaire_acc += $nums[$i];
    }
 }

 function somme(array $array): array
 {
    $paire_acc = 0;
    $impaire_acc = 0;
    for($i = 0; $i < count($array); $i++) {
       if($array[$i] % 2 == 0) {
           $paire_acc += $array[$i];
       } else {
           $impaire_acc += $array[$i];
       }
    }
    return [$impaire_acc, $paire_acc];
 }


 function sumModulo(array $numbers, int $modulo = 2): int {
    $sum = 0; 
    foreach ($numbers as $v) {
       if( $v % $modulo === 0 ) $sum += $v ;
    }

    return $sum ;
 }

 // afficher les nombres divisibles par 3 
 print_r(sumModulo(numbers : range(1, 100), modulo : 3 )) ;