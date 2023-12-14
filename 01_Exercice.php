<?php

function dump($results)
{
    echo '<pre>';
    print_r($results);
    echo '</pre>';
}

/**
* Boolean
*/
/*
*  01 Exercise quelle valeur de boolean retourne les expressions suivantes
*/

dump('test logique');

$exp1 = ( 0!= 0 && 1/0 == 2) ;  // false && ... == false 
// false

$exp2 = (!true || true) ; // false || true == true 
// true

$exp3 = (!true || false) ; // false || false == false
// false

$exp4 = !(true || true) ; // ! true == false
// false 

$exp5 = (true || false) && false; // true && false == false
// false

$exp6 = (true || false) && true; // true && true == true 
// true 

$exp7 = (true || false) && ( (!false && true) || true ); // true && true == true
// true

$exp8 = ((false || false) && (!false && false)) || true ; // false || true == true
// true

$exp9 = (false || false) && (!false && false) || true ; // false && true == false
// false

$exp10 = 3*3.5 > 10 ;
// true

$exp11 = 3*7  == 21 ;
// true 

$exp12 = 3-1 >= 1;
// true

$exp13 = 0 < pow(2,10) == pow(2,10);
// true

$exp14 = !(!true);
//true
$exp14bis = !(!( !(!(true)))) ; // 
// true 
$exp14bis = !(!( !(!(false)))) ; // 
// false

$exp15 = (5.5*2 == 11 || 1/2 != .5) && (3%2 == 0);
// false

$exp16 = (5.5*2 == 11 || 1/2 != .5) && (3%2 != 0); // true && true == true
// true

/*
 *  02 Exercice
 *
 *  écrire un script pour déterminer le maximun de trois variables distinctes $a, $b et $c
 *
 */

$a = 10;
$b = 5;
$c = 7;

/**
 * 03 Exercice 
 * écrire un script permettant de déterminer la valeur maximal d'un tableau d'entiers. Sans utiliser de fonction native.
 */

 $numbers = [19, 10, 7, 6, 8, 81, 0, 11, 4];

 for ($i=0; $i < count($numbers); $i++) { 
    dump($numbers[$i]);
 }

 /**
 * 03 Exercice
 *
 * 
 * Soit le tableau $data ci-dessous, 
 * 1. Comptez, dans un tableau $results, le nombre d'occurence(s) de 1.
 * 2. Retournez tous les indices ou apparait le nombre 1 dans le tableau $data.
 * 3. Généralisez avec une fonction les deux questions précédentes.
 */

 
$results = [];
$data = [1, 1, 2, 3, 4, 8, 8, 5, 6, 6, 9, 9, 10, 11, 12, 14, 48, 48, 51, 51, 1, 1, 1, 51, 3, 3, 3, 51, 51, 51, 51, 51, 0];

