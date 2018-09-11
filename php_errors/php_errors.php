<?php
echo '<pre>';

//  Fatal error: Uncaught Error: Call to undefined function undefinedFunction()
//echo undefinedFunction();

// -----------------------------------------------------------------------------

function func($a, $b) {

  return $a + $b;
}
//  Fatal error: Uncaught ArgumentCountError: Too few arguments to function func(), 1 passed in
//  ArgumentCountError: Too few arguments to function func(), 1 passed in
$a = 2;
echo func($a);

// -----------------------------------------------------------------------------
// Warning: require(not_existing.php): failed to open stream:
// Fatal error: require(): Failed opening required 'not_existing.php'
//require 'not_existing.php';

//  Warning: include(not_existing.php): failed to open stream:
//  Warning: include(): Failed opening 'not_existing.php' for inclusion
include 'not_existing.php';

echo 23;

// -----------------------------------------------------------------------------

//  Notice: Undefined variable: undefinedVar in
echo $undefinedVar;
