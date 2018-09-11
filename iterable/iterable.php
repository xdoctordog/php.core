<?php

class trav implements IteratorA {

  private $arr = ['one', 'two', 'three'];
  private $key = 0;

  public function current() {

    return $this->arr[$this->key];
  }

  public function key() {

    return $this->key;
  }

  public function next(): void {
    ++$this->key;
  }

  public function rewind(): void {

    $this->key = 0;
  }

  public function valid(): bool {
    if (isset($this->arr[$this->key])) {

      return true;
    }

    return false;
  }
}

function func(): iterable {

  return [1, 2, 3];
}

function funcB(): Traversable {

  return new trav;
}

function funcC(): iterable {

  return new trav;
}

echo '<pre>';

var_dump(func());
// -----------------------------------------------------------------------------

$trav = funcB();

foreach ($trav as $key => $value) {
  var_dump([
    '$key' => $key,
    '$value' => $value,
  ]);
}
// -----------------------------------------------------------------------------
$travC = funcC();

foreach ($travC as $keyC => $valueC) {
  var_dump([
    '$keyC' => $keyC,
    '$valueC' => $valueC,
  ]);
}
