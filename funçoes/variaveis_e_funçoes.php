<?php

// nao pode passar uma variavel dentro da function

$taxa = 2;

function sum(int $n1, int $n2):array
{
    global $taxa;

    $teste = 12;
    $soma = ($n1 + $n2) * $taxa;

    // para mostrar dois valores coloca entre []
    return [
        'teste'=> $teste, 
        'soma'=> $soma,
    ];

    // quando usa o return oq esta pra baixo a function ignora
}

$result = sum(2,2);
// var_dump($result['soma']);
var_dump($result);