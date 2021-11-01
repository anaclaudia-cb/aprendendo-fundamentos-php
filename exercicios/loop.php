
<?php

 $names1 = ['DJR', 'maria', 'evandro', 'pedro', 'achei', 'jonas', 'tereza'];
 $names2 = ['DJR', 'maria', 'evandro', 'pedro', 'paulo', 'jonas', 'tereza'];
 $names3 = ['achei', 'maria', 'evandro', 'pedro', 'DJR', 'jonas', 'tereza'];
 $names4 = ['raul', 'maria', 'evandro', 'pedro', 'DJR', 'jonas', 'achei'];
 $names5 = ['DJR', 'achei', 'evandro', 'pedro', 'achei', 'jonas', 'tereza'];

// $lista_nomes = [
//    ['DJR', 'maria', 'evandro', 'pedro', 'achei', 'jonas', 'tereza'],
//    ['DJR', 'maria', 'evandro', 'pedro', 'paulo', 'jonas', 'tereza'],
//    ['achei', 'maria', 'evandro', 'pedro', 'DJR', 'jonas', 'tereza'],
//    ['raul', 'maria', 'evandro', 'pedro', 'DJR', 'jonas', 'achei'],
//    ['DJR', 'achei', 'evandro', 'pedro', 'achei', 'jonas', 'tereza']

// ];


$i = 0;
$achei = false; 
$quantidade = count($names1);

while ($i < $quantidade && $achei = false){
   if ($names1[$i] == $palavra){
      $achei = true;
   } else{
      $i++;
   }
}

if ($achei == true){
   echo "A palavra foi encontrada! Sua posição no array é {$i}" . PHP_EOL;
   return $i;
} else {
   echo "Nada encontrado." . PHP_EOL;
   return -1;
}

// $resultado = encontra('achei', $lista_nomes[1]);

// if($resultado == -1){
//    echo "Nada encontrado." . PHP_EOL;
// } else {
//    echo "Resultado encontrado na posição {$resultado}". PHP_EOL;
// }



?>

