<?php

class Data implements IteratorAggregate {

  public $privA = 1;

  public $privB = 2;

  public $privC = 3;

  public $privD = 4;

  public function getIterator() {
    return new ArrayIterator($this);
  }
}

$data = new Data();
echo '<pre>';
foreach ($data as $key => $value) {
  var_dump([
    '$key'   => $key,
    '$value' => $value,
  ]);
}

//------------------------------------------------------------------------------

class Collection implements IteratorAggregate {

  private $items
    = [
      'one'   => 'apple',
      'two'   => 'banana',
      'three' => 'orange',
    ];

  public function getIterator() {
    return (function () {
      while (list($key, $value) = each($this->items)) {
        yield $key => $value;
      }
    })();
  }
}

$collection = new Collection;

foreach ($collection as $key => $value) {
  var_dump([
    '$key' => $key,
    '$value' => $value,
  ]);
}


