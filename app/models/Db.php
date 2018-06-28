<?php

$db = null;

function connect()
{
    global $db;
    $host = 'localhost';
    $dbname = 'mvc';
    $user = 'databaseuser';
    $password = '111111';
    if ($db === null) {
        $db = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
        $db->exec("SET CHARACTER SET utf8");
    }
    return $db;
}
