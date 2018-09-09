<?php

function errorHandler($errno, $errstr){
    echo '<pre>';
    echo "[<" . __LINE__ . ">]<b>Error:</b> [$errno] $errstr<br>";
}


set_error_handler('errorHandler', E_USER_WARNING);

$param = 1;
if ($param > 0) {
    trigger_error("Value must be zero", E_USER_WARNING);
}

//----------------------------------------------------------

function errorHandlerInternalError($errno, $errstr){
    echo '<pre>';
    echo "[<" . __LINE__ . ">]<b>Error:</b> [$errno] $errstr<br>";
}

set_error_handler('errorHandlerInternalError', E_ERROR);

$param = 1;
if ($param > 0) {
    trigger_error("Value must be zero", E_ERROR);
}

//----------------------------------------------------------

function errorHandlerInternalWarning($errno, $errstr){
    echo '<pre>';
    echo "[<" . __LINE__ . ">]<b> -- Error -- :</b> [ error number: $errno ] $errstr<br>";
}

set_error_handler('errorHandlerInternalWarning', E_WARNING);

$param = 1;
if ($param > 0) {
    trigger_error("Value must be zero", E_WARNING);
}

//----------------------------------------------------------

function errorHandlerInternalParse($errno, $errstr){
    echo '<pre>';
    echo "[<" . __LINE__ . ">]<b>Error:</b> [$errno] $errstr<br>";
}

set_error_handler('errorHandlerInternalParse', E_PARSE);

$param = 1;
if ($param > 0) {
    trigger_error("Value must be zero", E_PARSE);
}

//----------------------------------------------------------

function errorHandlerAll($errno, $errstr){
    echo '<pre>';
    echo "[<" . __LINE__ . ">]<b>Error:</b> [$errno] $errstr<br>";

}

set_error_handler('errorHandlerAll', E_ALL);

function shutdownHandler() {
    var_dump('I AM HERE');
}

register_shutdown_function('shutdownHandler');

require 'not_existing.php';
