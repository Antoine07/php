<?php

require_once __DIR__ . '/vendor/autoload.php';

/**
 * 07 Exercice zip
 * Dans le mot suivant
 * Comptez le nombre de i
 * Puis comptez le nombre de chaque lettre
 */

$phrase = "Mississippi";

$s = "i";
$count = 0 ;
foreach(str_split($phrase) as $w){
    if($w == $s) $count++ ;
}

echo $count ;

// généralise 

function countLetter($phrase) : array{
    $stat = [];
    $count = 0 ;
    $letters = str_split($phrase) ;
    foreach($letters as $w){
        if( !array_key_exists($w, $stat) ) $stat[$w] = 1 ;
        else $stat[$w] += 1 ;
    }

    return $stat;
}