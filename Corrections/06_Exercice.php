<?php
/**
 * 06 Exercice zip
 * 
 * Créez une fonction zip, elle prend deux tableaux de même longueur et rassemble les valeurs terme à terme dans des couples de deux valeurs dans un tableau
 * 
 * Dans l'exemple ci-dessous le tableau renvoyé par la fonction affichera 
 * 
 * [ [1,5], [2, 6], [3, 7], [4, 8] ]
 * 
 */

 $numbers_01 = [1, 2, 3, 4];
 $numbers_02 = [5, 6, 7, 8];

 function zipNumbers($n1, $n2){
    $lnNb1 = count($n1);
    $lnNb2 = count($n2);
    $res = [] ;

    if($lnNb1 != $lnNb2) throw new Exception("bad length"); 

    for ($i=0 ; $i < $lnNb1 ; $i++ ) $res[] = [$n1[$i], $n2[$i]] ;

    return $res ;
 }

 $r = zipNumbers($numbers_01,  $numbers_02) ;

 print_r( $r ) ;

$sum = [];
foreach($r as $n) $sum[] = array_sum($n) ;

print_r( $sum ) ;

// zipNumbers($numbers_01,  [1,2]) ;

try {
    $r = zipNumbers($numbers_01,  [1,2]) ;
} catch (Exception $e) {
    print_r($e->getMessage());
}




