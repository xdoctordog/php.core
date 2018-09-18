<?php

require 'MySpace/User.php';

// Require is not enough, we should set
//  Fatal error: Uncaught Error: Class 'User' not found in C:\Projects\php.core\namespace\namespace.php on line 5
//$user = new User;

// Can be with first slash or without
use \MySpace\User;
use MySpace\User as Usr;
$user = new User;

echo '<pre>';
var_dump($user);

$usr = new Usr;
var_dump($usr);

// Fatal error: Uncaught Error: Class 'OtherSpace\User' not found in C:\Projects\php.core\namespace\namespace.php on line 22
use \OtherSpace\User as OtherUser;
require 'OtherSpace\User.php';
$otherUsr = new OtherUser;
var_dump($otherUsr);

//------------------------------------------------------------------------------
//      MULTIPLE NAMESPACES IN ONE PHP FILE
//------------------------------------------------------------------------------

require 'multipleNamespaces.php';

$thirdUser = new ThirdNamespace\User();
var_dump($thirdUser);

$fourthUser = new FourthNamespace\User();
var_dump($fourthUser);
