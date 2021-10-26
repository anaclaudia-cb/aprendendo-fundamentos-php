<?php

// $names = ['a', 'b', 'c', 'e', 'f', 'g', 'h'];

// foreach ($names as $name){
//     echo $name;
// }

$names = [
    'a' => 'aa',
    'b' => 'bb',
    'c' => 'cc',
    'd' => 'dd',
    'e' => 'ee',
    'f' => 'ff',
    'g' => 'gg',
    'h' => 'hh',
];

// chave, mostrar os valores
foreach ($names as $key => $name){
    echo "{$key} => {$name} <br>";
}