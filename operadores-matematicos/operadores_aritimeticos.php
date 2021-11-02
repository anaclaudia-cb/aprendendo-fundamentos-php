<?php

// soma (+)
$a = 2;
$b = 3;

$result = $a + $b;

echo "O resultado da soma entre {$a} + {$b} = {$result}";

//subtração (-)
echo '<hr>';

$result = $b - $a;

echo "O resultado da subtração entre {$b} - {$a} = {$result}";

// multiplicação (*)
echo '<hr>';

$result = $a * $b;

echo "O resultado da multriplicação entre {$a} x {$b} = {$result}";

// divisão (/)
echo '<hr>';

$c = 2;
$d = 2;

$result = $c / $d;

echo "O resultado da divisão entre {$c} ÷ {$d} = {$result}";

// resto da divisão (%)
echo '<hr>';

$e = 2;
$f = 3;

$result = $e % $f;

echo "O resultado do resto da divisão entre {$e} ÷ {$f} = {$result}";

// verificar se o valor e impar ou par
echo '<hr>';

if ($a % 2 == 0)
    echo 'Par';
else
    echo 'Impar';
