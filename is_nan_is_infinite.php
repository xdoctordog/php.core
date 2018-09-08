<?php

echo '<pre>';

$finite = log(0);
print_r([
    'definition' => '$finite = log(0);',
    'is_finite($finite)' => is_finite($finite)? 'true': 'false',
    'is_infinite($finite)' => is_infinite($finite)? 'true': 'false',
    'is_nan($finite)' => is_nan($finite)? 'true': 'false',
    '$finite' => $finite,
]);
//Warning:  Division by zero in C:\Projects\php.core\is_nan_is_infinite.php on line 14
$finite = 1/0;
print_r([
    'definition' => '$finite = 1/0;',
    'is_finite($finite)' => is_finite($finite)? 'true': 'false',
    'is_infinite($finite)' => is_infinite($finite)? 'true': 'false',
    'is_nan($finite)' => is_nan($finite)? 'true': 'false',
    '$finite' => $finite,
]);

$nan = acos(8);
print_r([
    'definition' => '$nan = acos(8);',
    'is_nan($nan)' => is_nan($nan)? 'true': 'false',
    'is_finite($nan)' => is_finite($nan)? 'true': 'false',
    'is_infinite($nan)' => is_infinite($nan)? 'true': 'false',
    '$nan' => $nan,
]);
