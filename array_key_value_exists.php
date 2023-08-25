<?php

$pupils = [
    'felipe'=>46,
    'kelvin'=>28,
    'david'=>29,

];

$exists = array_key_exists('pedro', $pupils);

$name = 'felipe';
$age = 29;

if(array_key_exists($name, $pupils) && in_array($age, $pupils)){
    echo "Existe algum {$name} e também alguém de {$age} anos";
}else{
    echo "Deu ruim!";
}

//var_dump($exists);