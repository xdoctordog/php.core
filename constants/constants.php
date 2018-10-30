<?php

echo '<pre>';

//------------------------------------------------------------------------------
define('BIG_CONSTANT', 'value of big constant');
// Warning: Use of undefined constant bIg_CONSTANT - assumed 'bIg_CONSTANT'
// (this will throw an Error in a future version of PHP)
// in C:\Projects\php.core\constants\constants.php on line 6
//var_dump(bIg_CONSTANT);

//------------------------------------------------------------------------------
const someOtherConstant = 'some another value';
//Warning: Use of undefined constant someOtherConstanT - assumed 'someOtherConstanT'
// (this will throw an Error in a future version of PHP)
// in C:\Projects\php.core\constants\constants.php on line 14
//var_dump(someOtherConstanT);

//------------------------------------------------------------------------------
define('SoMeThing', 'some think', true);
const SomeThing = '707';
// Using case-insensitive constant in php.
var_dump(SomeThing);
var_dump(SOmeThing);
var_dump(SOMeTHing);
var_dump(SOMeTHinG);
var_dump(SoMeThing);
//Warning: Use of undefined constant SoMeThink - assumed 'SoMeThink'
// (this will throw an Error in a future version of PHP)
// in C:\Projects\php.core\constants\constants.php on line 24
var_dump(SoMeThink);
