<?php

class Base {

  private function privateMethod()
  {

  }

  protected function protectedMethod()
  {

  }

  public function publicMethod()
  {

  }
}

class Entity extends Base {

  public function protectedMethod()
  {

  }

  protected function privateMethod()
  {

  }
}

$entity = new Entity;

echo '<pre>';
var_dump($entity);


