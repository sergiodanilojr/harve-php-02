<?php

function sum(float $numberOne, float $numberTwo):float
{
    return $numberOne + $numberTwo;
}

$multiply = function($n1, $n2){
    return $n1 * $n2;
};

$list = [1,2,3,4];

function filter($number){
    return ($number <=3);
}

$result = array_filter($list, 'filter');


echo "<pre>";
print_r($result);