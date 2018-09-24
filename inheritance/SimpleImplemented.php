<?php

namespace inheritance;

class SimpleImplemented extends BaseClass implements BaseInterface {

    public function publicMethod(){

    }

    public function publicMethodWithThis(){

    }


    public static function publicStaticMethod(){

    }

    public function publicMethodWithArg(string $string) :string {

        return $string;
    }

    public function publicMethodWithArgWithThis(string $string) :string{

    }

    public static function publicStaticMethodWithArg(iterable $iterable) :iterable{

    }

    private function privateMethod(){

    }


}
