<?php
echo '<pre>';
$arr = ["apple", "juice", "banana", "potato"];
$iterator = new ArrayIterator($arr);
foreach ($iterator as $key => $value) {
  echo $key . ":  " . $value . "<br>";
}
//------------------------------------------------------------------------------
$multipleArray = ["level-1: 0", "level-1: 1", "level-1: 2", "level-1: 0",
  ['leve2-1: 0', 'leve2-1: 1', 'leve2-1: 2',
   ['leve3-1: 0', 'leve3-1: 1', 'leve3-1: 2', ]]];
$iterator = new ArrayIterator($multipleArray);

foreach ($iterator as $key => $value) {
  echo $key . ":  ";
  var_dump($value);
  echo "<br>";
}
//------------------------------------------------------------------------------
$multipleArray = ["level-1: 0", "level-1: 1", "level-1: 2", "level-1: 0",
  ['leve2-1: 0', 'leve2-1: 1', 'leve2-1: 2',
   ['leve3-1: 0', 'leve3-1: 1', 'leve3-1: 2', ]]];
$iterator = new RecursiveIteratorIterator(new RecursiveArrayIterator($multipleArray));

foreach ($iterator as $key => $value) {
  echo $key . ":  ";
  var_dump($value);
  echo "<br>";
}
//------------------------------------------------------------------------------
$dir = new DirectoryIterator("./");

foreach ($dir as $item) {
  var_dump($item);
}
//------------------------------------------------------------------------------
$dir = new RecursiveDirectoryIterator("./");

foreach ($dir as $item) {
  var_dump($item);
}
//------------------------------------------------------------------------------
$dir = new RecursiveIteratorIterator(new RecursiveDirectoryIterator("./"));

foreach ($dir as $item) {
  var_dump($item);
}

