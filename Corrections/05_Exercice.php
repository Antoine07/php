<?php

/**
* 05 Exercice Implémentez une fonction qui permet de calculer la puissance d'un nombre entier. Sans utilisez la fonction native de PHP 
*/

function powerNumber(int $nb, int $pow):int{
    $result = 1;
    for($i = 0; $i < $pow; $i++){
        $result *= $nb;
    }
    return $result;
}


// très algo à ne pas regarder 

function puissance_opt(int $x, int $n)
{

    if($n == 0) 
        return 1;
    elseif($n == 1) 
        return $x;
    else 
    {
        // on peut factoriser $rec = puissance_opt($x, (int) $n/2);
        if( $n%2 == 0) 
            return puissance_opt($x, $n/2) * puissance_opt($x, $n/2);
        else
            return $x * puissance_opt($x, ($n-1)/2) * puissance_opt($x, ($n-1)/2);
    }

}

dump(puissance_opt(2,20));