<?php
echo '<pre>';

function foo(iterable $object = []) {

  foreach ($object as $key => $value) {
    echo '$key:' . $key;
    echo '<br>';
    echo '$value:' . $value;
    echo '<br>';
  }
}

foo([
  'one' => 'apple',
  'two' => 'banana',
]);
//------------------------------------------------------------------------------
//        Traversable = []
//------------------------------------------------------------------------------
//  Fatal error: Default value for parameters with a class type can only be NULL in C:\Projects\php.core\iterable\iterables.php on line 21
/*function fooB(Traversable $object = []) {

  foreach ($object as $key => $value) {
    echo '$key:' . $key;
    echo '<br>';
    echo '$value:' . $value;
    echo '<br>';
  }
}

fooB([
  'one' => 'apple',
  'two' => 'banana',
]);
*/

//------------------------------------------------------------------------------
//        Traversable
//------------------------------------------------------------------------------
//  Fatal error: Default value for parameters with a class type can only be NULL in C:\Projects\php.core\iterable\iterables.php on line 21
/*
function fooC(Traversable $object) {

  foreach ($object as $key => $value) {
    echo '$key:' . $key;
    echo '<br>';
    echo '$value:' . $value;
    echo '<br>';
  }
}
// Fatal error: Uncaught TypeError: Argument 1 passed to fooC()
// must implement interface Traversable, array given, called
// in C:\Projects\php.core\iterable\iterables.php on line 53
// and defined in C:\Projects\php.core\iterable\iterables.php on line 42
fooC([
  'one' => 'apple',
  'two' => 'banana',
]);

*/
//------------------------------------------------------------------------------
//        Iterator
//------------------------------------------------------------------------------
//  Fatal error: Default value for parameters with a class type can only be NULL in C:\Projects\php.core\iterable\iterables.php on line 21
/*
function fooCA(Iterator $object) {

  foreach ($object as $key => $value) {
    echo '$key:' . $key;
    echo '<br>';
    echo '$value:' . $value;
    echo '<br>';
  }
}
// Fatal error: Uncaught TypeError: Argument 1 passed to fooCA()
// must implement interface Iterator, array given, called
// in C:\Projects\php.core\iterable\iterables.php on line 81
// and defined in C:\Projects\php.core\iterable\iterables.php on line 67
fooCA([
  'one' => 'apple',
  'two' => 'banana',
]);
*/

//------------------------------------------------------------------------------
//        : iterable
//------------------------------------------------------------------------------

function fooD(): iterable {

  return [1, 2, 3];
}

var_dump(fooD());

//------------------------------------------------------------------------------
//        : Traversable
//------------------------------------------------------------------------------

function fooE(): Traversable {

  return [1, 2, 3];
}

var_dump(fooD());

