<?php

$list = ["maçã", "pera", "uva", "morango"];

$result = array_map(function($fruits){
    echo $fruits."<br />";
    return $fruits;
}, $list);

print_r(compact('result'));
