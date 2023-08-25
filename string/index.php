<?php

$me = 'sergio';
$endpoint = 'eu';

$phone = "(41) 99288-5586";

$text = "eu              sou             bagual";

echo preg_replace("/\s+/", " ", $text);

function onlyDigits(string $input){
    return preg_replace("/[0-9]/", "", $input);
}

// echo onlyDigits($phone);

function removeBar(string $from):string
{
    if($from[0] === '/'){
        $from = str_replace('/', '', $from);
    }

    return $from;
}

//echo removeBar($endpoint);

// var_dump( $endpoint[0] == '/');