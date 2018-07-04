<?php


use Illuminate\Database\Capsule\Manager as Capsule;

$capsule = new Capsule();
$capsule->addConnection(
    [
        'driver' => 'mysql',
        'host' => 'localhost',
        'database' => 'mvc',
        'username' => 'databaseuser',
        'password' => '111111',
        'charset' => 'utf8',
        'collation' => 'utf8_general_ci',
        'prefix' => '',
    ]
);

$capsule->setAsGlobal();
$capsule->bootEloquent();



//$db = null;
//
//function connect()
//{
//    global $db;
//    $host = 'localhost';
//    $dbname = 'mvc';
//    $user = 'databaseuser';
//    $password = '111111';
//    if ($db === null) {
//        $db = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
//        $db->exec("SET CHARACTER SET utf8");
//    }
//    return $db;
//}

