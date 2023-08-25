<?php

$arr1 = [1,2,3,4];

$arr2 = [5,6,7,8, 4, 2];

// $merge = array_merge( $arr2,$arr1);

$merge = [...$arr2, ...$arr1];

echo "<pre>";
print_r($merge);