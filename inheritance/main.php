<?php

namespace inheritance;

$baseClassObject = new BaseClass;
$simpleClassObject = new SimpleClass;
$simpleImplementedObject = new SimpleImplemented;
$basetTraitedObject = new BaseTraited;

echo '<pre>';
if (false) {

    var_dump(
        [
            '$baseClass::publicConstBase' => $baseClassObject::publicConstBase,
            '$baseClass::publicConstArrayBase' => $baseClassObject::publicConstArrayBase,

            'BaseClass::publicConstBase' => BaseClass::publicConstBase,
            'BaseClass::publicConstArrayBase' => BaseClass::publicConstArrayBase,

            'BaseClass::publicStaticMethod()' => BaseClass::publicStaticMethod(),
            '$baseClass::publicStaticMethod()' => $baseClassObject::publicStaticMethod(),

            '$baseClass::publicMethod()' => $baseClassObject::publicMethod(),
            '$baseClass::publicMethodWithArg(\'\')' => $baseClassObject::publicMethodWithArg(''),


            '$baseClass::publicStaticMethod(\'\')' => $baseClassObject::publicStaticMethod(),
            '$baseClass::publicStaticMethodWithArg([1, 2, 3])' => $baseClassObject::publicStaticMethodWithArg(
                [1, 2, 3]
            ),


            'CONST_BaseClass' => CONST_BaseClass,
            'small_CONST_BaseClass' => small_CONST_BaseClass,
            'array_CONST_BaseClass' => array_CONST_BaseClass,
        ]
    );
    var_dump(
        [
            '$simpleClass::publicConstBase' => $simpleClassObject::publicConstBase,
            '$simpleClass::publicConstArrayBase' => $simpleClassObject::publicConstArrayBase,

            'SimpleClass::publicConstBase' => SimpleClass::publicConstBase,
            'SimpleClass::publicConstArrayBase' => SimpleClass::publicConstArrayBase,

            'SimpleClass::publicStaticMethod()' => SimpleClass::publicStaticMethod(),
            '$simpleClass::publicStaticMethod()' => $simpleClassObject::publicStaticMethod(),

            '$simpleClass::publicMethod()' => $simpleClassObject::publicMethod(),
            '$simpleClass::publicMethodWithArg(\'SOME STRING\')' => $simpleClassObject::publicMethodWithArg(
                'SOME STRING'
            ),

            '$simpleClass::publicMethodWithThis()' => $simpleClassObject->publicMethodWithThis(),
            '$simpleClass::publicMethodWithArgWithThis(\'\')' => $simpleClassObject->publicMethodWithArgWithThis(
                'SOME STRING'
            ),

            '$simpleClass::publicStaticMethod(\'\')' => $simpleClassObject::publicStaticMethod(),
            '$simpleClass::publicStaticMethodWithArg([1, 2, 3])' => $simpleClassObject::publicStaticMethodWithArg(
                [1, 2, 3]
            ),
        ]
    );

    var_dump(
        [
            '$simpleImplementedObject' => $simpleImplementedObject,
            '$simpleImplementedObject::publicConstBase' => $simpleImplementedObject::publicConstBase,
            '$simpleImplementedObject::publicConstArrayBase' => $simpleImplementedObject::publicConstArrayBase,
            '$simpleImplementedObject->publicMethodWithArg(\'some\')' => $simpleImplementedObject->publicMethodWithArg(
                'some'
            ),
        ]
    );
}

var_dump(
    [
        '$basetTraitedObject' => $basetTraitedObject,
        '$basetTraitedObject->publicMethod()' => $basetTraitedObject->publicMethod(),
//        '$basetTraitedObject::getPrivateStaticString()' => $basetTraitedObject::getPrivateStaticString(),
//        '$basetTraitedObject::getProtectedStaticString()' => $basetTraitedObject::getProtectedStaticString(),
    ]
);




