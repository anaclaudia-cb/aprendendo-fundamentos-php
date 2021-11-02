<?php

$a = 2;
$b = 2;

// com (==) ele verifica se o valor é igual 
if ($a == $b){
    echo 'IF';
} else {
    echo 'ELSE';
}

echo '<hr>';

// com (===) ele verifica também se o tipo é igual

$c = 2;
$d = '2';

if ($c === $d){
    echo 'IF';
} else {
    echo 'ELSE';
}

echo '<hr>';

// diferente (<>) ou usando: (!=)

if ($a <> $b){
    echo 'IF';
} else {
    echo 'ELSE';
}

echo '<hr>';

// verifica se o item é maior (>) maior e igual (>=) menor (<) menor e igual (<=)