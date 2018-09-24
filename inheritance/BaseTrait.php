<?php

namespace inheritance;

trait BaseTrait {

//    public $publicString = 'TRAIT i am Base public';
    protected $protectedString = 'TRAIT i am Base protected';
    private $privateString = 'TRAIT i am Base private';

//    public static $publicStaticString = 'TRAIT i am Base Static public';
//    protected static $protectedStaticString = 'TRAIT i am Base Static protected';

    private static $privateStaticString = 'TRAIT i am Base Static private';

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