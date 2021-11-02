<?php

$a = 2;
$b = 2;


// // a é igual a b E se a é igual a 2
// //     outra forma de utilizar o AND é utilizando o &&
// if ($a == $b AND $a == 2)
// //           &&
// {
//     echo 'No IF';
// } else {
//     echo 'No ELSE';
// } 


// a é igual a b OU se a é igual a 2
//  outra forma de utilizar o OR é ||
if ($a == $b or $a == 2) {
            #||
    echo 'No IF';
} else {
    echo 'No ELSE';
}

echo '<hr>';

// os mais utilizados são && e ||

// se $a é igual a $b e $a é igual a 2 ou se $b é igual a 2
if (($a == $b && $a = 2) || $b == 2){
    echo 'No IF';
} else {
    echo 'No ELSE';
}

echo '<hr>';

// note (!) nega a instrução
if (!$a == 2) {
    echo 'No IF';
} else {
    echo 'No ELSE';
}