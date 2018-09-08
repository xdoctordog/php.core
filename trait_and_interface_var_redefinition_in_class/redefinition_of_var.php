<?php

interface I {
    const CONST_VAR = 'interface_value';
}

class A implements I {
//    Fatal error: Cannot inherit previously-inherited or override constant CONST_VAR from
//    interface I in C:\Projects\dc.loc\index.php on line 7
//    const CONST_VAR = 'class_value';
}

trait TestTrait {
    public $pub = 10;
}

class B {
//  Fatal error: B and TestTrait define the same property ($pub) in the composition of B.
//  However, the definition differs and is considered incompatible.
//  Class was composed in C:\Projects\dc.loc\index.php on line 15

//  Fatal error: B and TestTrait define the same property ($pub) in the composition of B.
//  However, the definition differs and is considered incompatible.
//  Class was composed in C:\Projects\dc.loc\index.php on line 17
//    use TestTrait;
    public $pub = 777;
}

class Base {
    public $pub = 90;
}

class ParentClass /*extends Base */{
//    use TestTrait;
}

$b = new B;
$parentObject = new ParentClass;

echo '<pre>';
// [TEST A]
//var_dump(A::CONST_VAR);

// [TEST B]
//var_dump($b);

// [TEST C]
//var_dump($parentObject);
