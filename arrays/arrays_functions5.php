<?php

// end, array_filter, array_map

$ages = [12, 14, 18, 20, 44, 50, 98, 78, 56];

// echo $ages[count($ages) - 1];
// echo end($ages);

  // count() = tamanho do array conta quantos registros tem
  // count conta do 1 array do 0
  // função end() retorna o ultimo elemento do array

$agesFiltered = array_filter($ages, function ($age) {
    return $age >= 18;
});

   // array_filter() função de filtragem do array

// var_dump($agesFiltered);

$names = ['Carlos', 'EspecializaTi', 'Company'];
/*
$names[0] = strtoupper($names[0]);
$names[1] = strtoupper($names[1]);
$names[2] = strtoupper($names[2]);
*/

   // strtoupper deixar com caracteres maisculos
   
$names = array_map('applyToupper', $names);

function applyToupper($value)
{
    return strtoupper($value);
}

var_dump($names);