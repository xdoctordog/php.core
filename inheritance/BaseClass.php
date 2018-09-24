<?php

namespace inheritance;

define('CONST_BaseClass', 'CONST of Base Class');
define('small_CONST_BaseClass', 'small CONST of Base Class');
define('array_CONST_BaseClass', ['array CONST of Base Class', 'array CONST of Base Class']);

class BaseClass {
  public const publicConstBase = 'public constant inside of Base';
  public const publicConstArrayBase = ['public constant as array inside of Base', 'some 2'];

  protected const protectedConstBase = 'protected constant inside of Base';
  protected const protectedConstArrayBase = ['protected constant as array inside of Base', 'some 2'];

  private const privateConstBase = 'PRIVATE constant inside of Base';
  private const privateConstArrayBase = ['PRIVATE constant as array inside of Base', 'some 2'];

  public $publicString = 'i am Base public';
  protected $protectedString = 'i am Base protected';
  private $privateString = 'i am Base private';

  public function publicMethod() {

    return __METHOD__;
  }

  protected function protectedMethod() {

    return __METHOD__;
  }

  private function privateMethod() {

    return __METHOD__;
  }

  public static function publicStaticMethod() {

    return __METHOD__;
  }

  protected static function protectedStaticMethod() {

    return __METHOD__;
  }

  private static function privateStaticMethod() {

    return __METHOD__;
  }

  public function publicMethodWithArg(string $string) :?string {

    return __METHOD__;
  }

  protected function protectedMethodWithArg(callable $callable) :callable {

    return __METHOD__;
  }

  private function privateMethodWithArg(\Traversable $traversable) :\Traversable {

    return __METHOD__;
  }

  public static function publicStaticMethodWithArg(iterable $iterable) :iterable {

    return __METHOD__;
  }

  protected static function protectedStaticMethodWithArg(\Iterator $iterator) :Iterator {

    return __METHOD__;
  }

  private static function privateStaticMethodWithArg(\IteratorAggregate $iteratorAggregate) {

    return __METHOD__;
  }

}
