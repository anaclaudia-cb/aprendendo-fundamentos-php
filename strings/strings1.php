<?php

$name = 'EspecializaTi';

//   converte os caracteres para maiusculos
echo strtoupper($name);

//   converte os caracteres para minusculos
echo strtolower($name);

//    primeiro caracter em maiusculo
echo ucfirst($name);

// pode mesclar as opções
echo ucfirst(strtolower($name));

// cada palavra o primeiro caracter e maiusculo
echo ucwords($name);