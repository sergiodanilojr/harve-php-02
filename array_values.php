<?php

$pupils = [
    'felipe'=>46,
    'kelvin'=>28,
    'david'=>29,

];

$ages = array_values($pupils);
$names = array_keys($pupils);

// array_shift($names);

$combine = array_combine($ages, $names);

echo "<pre>";
print_r($names);
print_r($ages);
print_r($combine);