<?php

$pupils = [
    'felipe'=>46,
    'kelvin'=>28,
    'david'=>29,

];

// $filtered = array_filter($pupils, function($age){
//     if($age <=30){
//         return $age;
//     }
// });

$filtered = array_filter(
    $pupils, 
    fn($age)=> $age == 46
);

echo "<pre>";
print_r($filtered);
