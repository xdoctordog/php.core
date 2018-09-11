<?php

function gen(): iterable {
  yield 'one';
  yield 'two';
  yield 'three';

  return 'four';
}

echo '<pre>';

foreach (gen() as $key => $value) {
  var_dump([
    '$keyC' => $key,
    '$valueC' => $value,
  ]);
}
