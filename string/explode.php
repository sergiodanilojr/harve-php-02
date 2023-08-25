<?php

$url = "linkedin/in/sergiodanilojr";

$divided = explode('/', $url);

echo $divided[count($divided)-1];

echo "<pre>";
print_r($divided);