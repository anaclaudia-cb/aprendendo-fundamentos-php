<?php

$domain = 'www.especializati.com.br';

//             substitui  por: 
echo str_replace('www.', 'https://www.', $domain);

//                 pega do caracter 0 ate o 4
echo substr($domain, 0, 4);

//            retorna so o final
echo substr($domain, -7);

$protocol = substr($domain, 0, 7);
if ($protocol == 'https')
    echo 'É seguro!';
    else 
    echo 'Não é seguro!';

var_dump(substr($domain, 7, -7));

//   conta quantos caracteres tem na variavel
echo strlen($domain);