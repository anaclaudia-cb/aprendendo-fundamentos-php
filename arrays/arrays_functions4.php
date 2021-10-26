<?php

// arsort, asort e sort

$cart = [
    0 => 'Macarrão', 
    1 => 'Feijão', 
    2 => 'Arroz', 
    3 => 'Batata'
    ];
    
    echo '<pre>';
    arsort($cart);
    
    var_dump($cart);
    
    echo '<hr>';
    
    // arsort() ordenas os produtos do menor para o maior (decrescente)
    
    asort($cart);
    var_dump($cart);
    
    echo '<hr>';
    
    // asort() ordena de forma crescente
    
    sort($cart);
    var_dump($cart);
    
    echo '<hr>';
    
    // sort() ordena de forma crescente tanto o vale quanto as chaves do array