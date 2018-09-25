<?php

namespace inheritance;

class BaseTraited extends BaseClass {
    use BaseTrait;

    public $publicString = 'BaseTraited $publicString';
    protected $protectedString = 'BaseTraited $protectedString';
    private $privateString = 'BaseTraited $privateString';
    private static $privateStaticString = 'BaseTraited $privateStaticString';
    public static $publicStaticString = 'BaseTraited $publicStaticString';
    protected static $protectedStaticString = 'BaseTraited $protectedStaticString';

}
