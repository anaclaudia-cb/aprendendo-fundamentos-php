<?php

$names = ['a', 'b', 'c'];

//verifica depois entra no loop
$i = 0;

while ($i < count($names)){
    echo $names[$i];

    $i++;
}

echo '<hr>';

//entra no loop depois verifica
$a = 1;

do{
    echo $a;
    $a++;
} while ($a <= 10);

// usa quando nao sabe quantos itens tem