<?php

//ctrl+d seleciona recursos iguais

$name = 'Carlos Ferreira';

echo $name;

// variavel ($) valor mutável 

/*

string              'Sou uma string'
                    "Valor:$variavel"

integer             12

boolean             true/false 0/1

float               3.14159265

array               $varName= array();
                    $varName= [];

object              $varObject= new stdClass;

resource (recurso)  mysql_connect(), mysql_query()
                    pg_connect(), pg_query()

mix (misto)         gettype($varName)
                    function echoVar($varName)
                    {
                        echo ($varName);
                    }

callback            call_user_func()

NULL                $nameVar= null;

*/

/* Erros

Não iniciar com números         $123nomeVar
Não utilizar espaços            $nome Var
Não usar caracteres especiais   $nome@#Var
Ter mais que 15 caracteres      $nomeDeVariaveisComMUitosCaracteres
Nome não fazer sentido          $a = 'Nome pessoa'

*/

?>