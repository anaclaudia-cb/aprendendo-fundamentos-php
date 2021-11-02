<?php

date_default_timezone_set('America/Sao_PAulo'); #define a zona de horario, deve ser colocado antes

echo 'O ano atual: ' . date('Y') . '<br>'; #mostra o ano
echo 'O mês atual: ' . date('m') . '<br>'; 
echo 'O dia atual: ' . date('d') . '<br>';
echo 'A data atual: ' . date('d/m/y') . '<br>'; #mostra a data dia mes e ano

echo 'Hora atual:' . date('H') . '<br>';
echo 'Minuto atual:' . date('i') . '<br>';
echo 'Segundo atual:' . date('s') . '<br>';

echo 'Hora atual:' . date('H:i:s') . '<br>'; #mostra hora minutos e segundos


echo 'Timezone:' . date_default_timezone_get();