<?php

session_start();

if (false) {
    $dbConnection = mysqli_connect('localhost', 'root', 'panda2014');

    echo '<pre>';

    $result = $dbConnection->query('SHOW DATABASES');

    while ($row = $result->fetch_array()) {
        var_dump($row);
    }

    $_SESSION['dbConnection'] = $dbConnection;
}

echo '<pre>';

echo '$_SESSION[dbConnection]';
var_dump($_SESSION['dbConnection']);

$result = $_SESSION['dbConnection']->query('SHOW DATABASES');

while ($row = $result->fetch_array()) {
    var_dump($row);
}
