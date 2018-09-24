<?php

namespace inheritance;

class BaseTraited extends BaseClass {
    use BaseTrait;


    public static function getPrivateStaticString()
    {
        return self::$privateStaticString;
    }

    public static function getProtectedStaticString()
    {
        return self::$protectedStaticString;
    }

//    public function publicMethod()
//    {
//
//        return __METHOD__;
//    }

}
