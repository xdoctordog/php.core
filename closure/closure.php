<?php

echo '<pre>';

function createFunction() {
    $someLocale = 10;

    return function ($something = null) use ($someLocale) {
        $someLocale *= 2;
        return $someLocale;
    };
}

$func = createFunction();

var_dump($func());
var_dump($func());

echo '<br>';

function createFunctionClosedByLInk() {
    $someLocale = 10;

    return function ($something = null) use (&$someLocale) {
        $someLocale *= 2;
        return $someLocale;
    };
}

$funcB = createFunctionClosedByLInk();

var_dump($funcB());
var_dump($funcB());
var_dump($funcB());
