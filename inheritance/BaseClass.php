<?php

namespace inheritance;

var_dump(BaseClass::$count);

define('CONST_BaseClass', 'CONST of Base Class');
define('small_CONST_BaseClass', 'small CONST of Base Class');
define('array_CONST_BaseClass', ['array CONST of Base Class', 'array CONST of Base Class']);

class BaseClass
{
    public static $count = 0;

    public const publicConstBase = 'public constant inside of Base';
    public const publicConstArrayBase = ['public constant as array inside of Base', 'some 2'];

    protected const protectedConstBase = 'protected constant inside of Base';
    protected const protectedConstArrayBase = ['protected constant as array inside of Base', 'some 2'];

    private const privateConstBase = 'PRIVATE constant inside of Base';
    private const privateConstArrayBase = ['PRIVATE constant as array inside of Base', 'some 2'];





    public $publicString = 'BaseClass $publicString';
    protected $protectedString = 'BaseClass $protectedString';
    private $privateString = 'BaseClass $privateString';
    private static $privateStaticString = 'BaseClass $privateStaticString';
    public static $publicStaticString = 'BaseClass $publicStaticString';
    protected static $protectedStaticString = 'BaseClass $protectedStaticString';


    public function publicMethod()
    {

        return __METHOD__;
    }

    public function publicMethodWithThis()
    {

        return $this->privateString;
    }

    protected function protectedMethod()
    {

        return __METHOD__.' | '.$this->privateMethod();
    }

    private function privateMethod()
    {

        return __METHOD__;
    }

    public static function publicStaticMethod()
    {

        return __METHOD__;
    }

    protected static function protectedStaticMethod()
    {

        return __METHOD__.' | '.self::privateStaticMethod();
    }

    private static function privateStaticMethod()
    {

        return __METHOD__;
    }


    public function publicMethodWithArg(string $string): ?string
    {

        return __METHOD__;
    }

    public function publicMethodWithArgWithThis(string $string): ?string
    {

        return $this->privateString.' | '.__METHOD__;
    }

    protected function protectedMethodWithArg(callable $callable): callable
    {

        $method = __METHOD__;

        return function () use ($method) {
            return $method;
        };
    }

    private function privateMethodWithArg(\Traversable $traversable): \Traversable
    {

        return __METHOD__;
    }

    public static function publicStaticMethodWithArg(iterable $iterable): iterable
    {

        return [__METHOD__];
    }

    protected static function protectedStaticMethodWithArg(\Iterator $iterator): Iterator
    {

        return __METHOD__;
    }

    private static function privateStaticMethodWithArg(\IteratorAggregate $iteratorAggregate)
    {

        return __METHOD__;
    }

}

BaseClass::$count++;


