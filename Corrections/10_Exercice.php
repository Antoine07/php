<?php

$alphabet = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
$phrase = "BONJOUR"; 

// Brouiller le message en utilisant le codage suivant, chaque lettre doit être décalé en fonction de la position des lettres du codage :
$codage = "SECRETKEY" ;

// décallez chaque lettre de +2 par rapport à l'alphabet


function cryptoModulo($letter, $alphabet, $decal = 2){
    $len = strlen($alphabet) ;
    $decal = [];

    for ($i=0; $i < $len ; $i++) { 
        if( strtolower($letter) == strtolower($alphabet[$i]) ) 
            return $alphabet[ ($i + $decal) % $len ] ;
    }

    return null;
}

