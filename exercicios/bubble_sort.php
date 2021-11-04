<?php

$numb = [1,21,58,6,9,10];
$qtd = count($numb);

for ($j=0; $j < $qtd; $j++){
    for ($i=0; $i < ($qtd -$j -1); $i++){
        if ($numb[$i] > $numb[$i+1]){
            $auxiliar = $numb[$i];
            $numb[$i] = $numb[$i+1];
            $numb[$i+1] = $auxiliar;
        }
        echo json_encode($numb) . '<br>';
    }

    echo '<br>' . PHP_EOL;
}