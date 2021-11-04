<?php

// $matriz = [
//     [1,2,3],
//     [4,5,6],
//     [7,8,9]
// ];

// $transposta = [
//     [1,4,7],
//     [2,5,8],
//     [3,6,9]
// ];


//      decodifica uma string JSON e converte em uma variável
$numb = [
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9]
];

$transposta = transposta($numb);
print_matriz($transposta);


//   converte um objeto php para uma string
// echo json_encode($numb);

function transposta($numb)
{
    $resultado = array();
    for ($i = 0; $i < count($numb); $i++) {
        for ($j = 0; $j < count($numb[$i]); $j++) {
            $resultado[$j][$i] = $numb[$i][$j];
        }
    }
    return $resultado;
}

function print_matriz($matriz)
{
    for ($i = 0; $i < count($matriz); $i++) {
        for ($j = 0; $j < count($matriz[$i]); $j++) {
           echo $matriz[$i][$j];
        }
        echo '<br>';
    }

}


// function transposta($numb) {
//     $resultado = array();
//     foreach ($numb as  $listas => $lista) {
//         foreach($lista as $matriz => $transposta){
//             $resultado[$matriz][$listas]=$transposta;
//         }
//     }
//     return $resultado;
// }
