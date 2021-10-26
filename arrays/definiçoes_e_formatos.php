<?php

// $car = array(1, 'Carlos' , 12.2);
// var_dump($car[1]);

// $cars = ['Uno', 'Gol', 'Fusion', 'Civic'];
// var_dump($cars[2]);

$car = [
  //indice  valores
    'cor'=> 'Branco',
    'portas'=> 4,
    'ano' => 2018,
];
$car['airbag'] = false;
$car ['som'] = 'Model 123';
echo $car['som'];

?>