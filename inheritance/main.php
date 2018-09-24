<?php

namespace inheritance;

$baseClass = new BaseClass;

echo '<pre>';
var_dump([
  '$baseClass::publicConstBase' => $baseClass::publicConstBase,
  '$baseClass::publicConstArrayBase' => $baseClass::publicConstArrayBase,
]);

