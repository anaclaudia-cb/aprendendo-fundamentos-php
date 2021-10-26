<?php

// array_pop, array_shift, unset, array_push, array_unshift, array_unique

$cart = ['Arroz', 'Sabão', 'Feijão', 'Balinhas'];
var_dump($cart);

echo '<hr>';

array_pop($cart);
var_dump($cart);

echo '<hr>';

array_shift($cart);
var_dump($cart);

echo '<hr>';

unset($cart[0]);
var_dump($cart);

echo '<hr>';

array_push($cart, 'Tapete');
array_push($cart, 'Rodo');
var_dump($cart);

echo '<hr>';

array_unshift($cart, 'Microondas');
array_unshift($cart, 'Tapete');
var_dump($cart);

echo '<hr>';

$cart = array_unique($cart);
var_dump($cart);