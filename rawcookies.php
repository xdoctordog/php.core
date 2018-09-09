<?php

//$r = setcookie('email', '', 0);
$r = setcookie('simple_email', 'some+parameter@gmail.com');
$r = setrawcookie('raw_email', 'some+parameter@gmail.com');
$r = setrawcookie('base64_raw_email', base64_encode('some+parameter@gmail.com'));


echo '<pre>';

$base64_raw_email = $_COOKIE['base64_raw_email'] ?? null;

if ($base64_raw_email) {
    $decoded = base64_decode($base64_raw_email);

    var_dump($decoded);
}

var_dump($_COOKIE);
var_dump($_SERVER);

