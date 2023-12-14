<?php
// variable globale est une constante 
define("ALPHABET",  [
    "A" => 0,
    "B" => 1,
    "C" => 2,
    "D" => 3,
    "E" => 4,
    "F" => 5,
    "G" => 6,
    "H" => 7,
    "I" => 8,
    "J" => 9,
    "K" => 10,
    "L" => 11,
    "M" => 12,
    "N" => 13,
    "O" => 14,
    "P" => 15,
    "Q" => 16,
    "R" => 17,
    "S" => 18,
    "T" => 19,
    "U" => 20,
    "V" => 21,
    "W" => 22,
    "X" => 23,
    "Y" => 24,
    "Z" => 25,
]);

define("LENGTH_ALPHABET", 26);

/**
* 01 Exercice 
* d'affichez le nombre correspand à la lettre
*/

function posCh(int $pos):string{

    // error first 
    if($pos < 0 || $pos > 25 ) 
        throw new Exception("Aucune lettre correspond à une position dans l'alphabet");

    foreach (ALPHABET as $l => $p) {
        if ($p === $pos) {
            return $l;
        }
    }
}

/**
* 02 Exercice 
* d'affichez la lettre correspand au nombre 
*/

function chPos(string $letter):int{
    $letter = strtoupper($letter);

    if( !array_key_exists($letter, ALPHABET) )
        throw new Exception("Aucun nombre correspond à une lettre");

    foreach (ALPHABET as $l => $p) {
        if ($l === $letter) {
            return $p;
        }
    }
}

// code secret 
$secret = "SECRETKEY";

function posSecret(string $secret) : array{
    $pos = [];
    for ($i=0; $i < strlen($secret); $i++) { 
        $pos[] = chPos($secret[$i]);
    }

    return $pos;
}

function crypto(string $phrase, array $decal) : string {
    $codage = "";
    for ($i=0; $i < strlen($phrase) ; $i++) { 
        $letter = $phrase[$i] ;
        if($letter == " "){
            $codage .= " ";
            // poursuit l'itération sans jouer le code qui suit
            continue ;
        }

        // la phrase peut être plus longue que le code secret
        // attention aux indices pour l'alphabet et à la longueur de votre décalage
        $pos =  (chPos($phrase[$i]) + $decal[ $i % count($decal) ] ) % LENGTH_ALPHABET;
        // print_r( posCh($pos) );
        // $codage .= posCh($pos)  <=> $codage = $codage . posCh($pos) 
        $codage .= posCh($pos) ;
    }

    return $codage;
}

$decal = posSecret($secret);
crypto( "BONJOUR TOUT LE MONDE", $decal);

// Si vous vous sentez faire maintenant le décryptage faites le !! 