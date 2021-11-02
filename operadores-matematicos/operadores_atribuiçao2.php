<?php

$a = 2;

//adiciona mais 1
$a++;

//diminui menos 1
$a--; #$a = $a - 1;

//outra forma
--$a;
++$a;

echo $a;

echo '<hr>';

$b = 2;

// ele nao soma dessa forma
echo $a + $b++;
echo "{$b} <br>";

// para somar use o pré-incremento
echo $a + ++$b;