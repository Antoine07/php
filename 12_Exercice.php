<?php

/**
 * 11 Exercice distance
 * Déterminez les deux villes les plus éloignées l'une de l'autre.
 */

 $cities = [
    'A' => [0, 0],
    'B' => [2, 4],
    'C' => [5, 2],
    'D' => [8, 5]
 ];


function distance(array $c1,array $c2) : float{

    // calcul de la distance entre deux points
    return sqrt(pow($c2[0] - $c1[0], 2) + pow($c2[1] - $c1[1], 2));
}


