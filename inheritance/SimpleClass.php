<?php

namespace inheritance;

class SimpleClass extends BaseClass {
    public const publicConstBase = 'public constant inside of Simple';
    public const publicConstArrayBase = ['public constant as array inside of Simple', 'some 2'];

    protected const protectedConstBase = 'protected constant inside of Simple';
    protected const protectedConstArrayBase = ['protected constant as array inside of Simple', 'some 2'];

    private const privateConstBase = 'PRIVATE constant inside of Simple';
    private const privateConstArrayBase = ['PRIVATE constant as array inside of Simple', 'some 2'];

    public $publicString = 'i am Simple public';
    protected $protectedString = 'i am Simple protected';
    private $privateString = 'i am Simple private';

    public function publicMethod() {

        return __METHOD__;
    }

    public function publicMethodWithArg(string $string) :?string {

        return '[' . $string .']';
    }

    public function publicMethodWithArgWithThis(string $string) :?string {

        return $this->protectedMethodWithArg(function() use ($string) {
            return __LINE__ . ' | $string: ' . $string;
        })();
    }

    protected function protectedMethodWithArg(callable $callable) :callable {

        $method = __METHOD__ . '[' . $callable() . ']';

        return function () use ($method) {
            return $method;
        };
    }
}
