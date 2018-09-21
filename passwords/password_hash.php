<?php

echo '<pre>';
$password = 'dmitriymorozov';

// Everytime it generates different values.
$passwordHash = password_hash($password, PASSWORD_DEFAULT);
var_dump([
  '$passwordHash' => $passwordHash,
]);
//------------------------------------------------------------------------------
$options = [
  'cost' => 12,
];
$passwordHashBcrypt = password_hash($password, PASSWORD_BCRYPT, $options);
var_dump([
    '$passwordHashBcrypt' => $passwordHashBcrypt,
]);
//------------------------------------------------------------------------------

$timeTarget = 0.05; // 50 ms.

$cost = 4;
do {
  $cost++;
  $start = microtime(true);
  password_hash($password, PASSWORD_BCRYPT, ["cost" => $cost]);
  $end = microtime(true);
} while (($end - $start) < $timeTarget);

var_dump("Optimal cost: " . $cost);
//------------------------------------------------------------------------------

