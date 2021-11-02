<?php

//  verifica se existe ou não
if (isset($name))
    echo $name;
else
    echo 'Não existe!';

    // deleta e variavel
unset($name);