<?php

// //combina um valor unico com a senha
// $salt = 'djkdahkjdjas0545dsaa';
// $password = '123456' . $salt;

// // criptografa 
// echo md5($password);
// echo sha1($password);
// echo crypt($password, $salt);
// echo $passCr;
// echo base64_decode($passCr);
// echo hash('sha512', $password);

$password = '123456';

function cryptC(string $value): String 
{
    $hash = hash('sha512', sha1(md5(crypt($value, 'dhsajkdaspdajksd846*'))));

    return $hash;
}