<?php

// function factorial(int $number):int
// {
//     // assim fica infinito
//     return $number = $number * factorial($number -1);
//     // simplificando:
//     // return $number *= factorial($number -1);    
// }

function factorial(int $number):int
{
    if ($number <= 1)
        $number = $number;
    else
        $number *= factorial($number -1);

    return $number;
}

factorial(4);