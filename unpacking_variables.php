<?php

echo '<pre>';

function inTest($first, $second, $third)
{
    echo '<br>';
    echo 'first: '.$first;
    echo '<br>';
    echo 'second: '.$second;
    echo '<br>';
    echo 'third: '.$third;
    echo '<br>';
}

function test(...$args)
{
    inTest(...$args);
}

test('apple', 'banana', 'cytrus');

echo '</pre>';
