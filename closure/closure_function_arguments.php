<?php

$bar = function (...$args) {
    var_dump($args);
};

echo '<pre>';
$bar(
    'foo',
    'bar',
    'baz'
);

// -----------------------------------------------------------------------------

/**
 * Class Foo.
 */
class Foo
{
    public $args = [];

    /**
     * Foo constructor.
     * @param array ...$args
     */
    public function __construct(...$args)
    {
        $this->args = $args;
    }

    /**
     * When object of class is called like a function.
     * @return string
     */
    public function __invoke(...$args)
    {

        return array_merge([__METHOD__], $args);
    }

    public function method(...$args) {

        return $args;
    }
}

$foo = new Foo('apple', 'banana', ['juice', 'potato']);

var_dump($foo->args);

var_dump($foo(['one', 'two']));

var_dump($foo->method(['red', 'green', 'blue']));
