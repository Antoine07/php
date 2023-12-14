<?php
/**
 * 11 Exercice 
 * 
 * ecrire une fonction qui retourne un array
 * 
 * si un nombre est divisible par 3 écrire 3 en toute lettre
 * si un nombre est divisible par 5 écrire 5 en toute lettre
 * si un nombre est divisible par 3 et 5 écrire 3 et 5 en toute lettre
 * 
 * exemple :
 * [1, 2, 'trois', 4, 'cinque', 'trois', ...]
 *  
 */
$nums = range(0, 15);

function multipleOf3and5(array $nums): array
{
    $results = [];
    foreach ($nums as $num) {
        if ($num % 3 == 0 && $num % 5 == 0) {
            $results[] = 'troisCinque';
        } elseif ($num % 3 == 0) {
            $results[] = 'trois';
        } elseif ($num % 5 == 0) {
            $results[] = 'cinque';
        } else {
            $results[] = $num;
        }
    }
    return $results;
}

echo "\n";
print_r(multipleOf3and5($nums));