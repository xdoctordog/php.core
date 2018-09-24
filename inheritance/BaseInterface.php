<?php

namespace inheritance;

define('CONST_BaseInterface', 'CONSTANT of Base Interface');

interface BaseInterface {

//    public const publicConstBase = 'public constant inside of BaseInterface';
//    public const publicConstArrayBase = ['public constant as array inside of BaseInterface', 'BaseInterface some 2'];


    public function publicMethod();
    public function publicMethodWithThis();
//    protected function protectedMethod();
//    private function privateMethod();
    public static function publicStaticMethod();
//    protected static function protectedStaticMethod();
//    private static function privateStaticMethod();
//
//
    public function publicMethodWithArg(string $string) :?string;
    public function publicMethodWithArgWithThis(string $string) :?string;
//    protected function protectedMethodWithArg(callable $callable) :callable;
//    private function privateMethodWithArg(\Traversable $traversable) :\Traversable;
    public static function publicStaticMethodWithArg(iterable $iterable) :iterable;
//    protected static function protectedStaticMethodWithArg(\Iterator $iterator) :Iterator;
//    private static function privateStaticMethodWithArg(\IteratorAggregate $iteratorAggregate);
}
