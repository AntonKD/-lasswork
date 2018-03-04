<?php

$db =[

    'dbname'=>'user_role',
    'host'=>'http://localhost',
    'port'=>'3306',
    'user'=>'root',
    'pwd'=>'',
];

//data source name
$dsn= 'mysql:dbname='.$db['dbname'].';host= '.$db['host'].';port='.$db['port'];
$pdo = new PDO($dsn, $db['user'], $db['pwd']);

$pdo->beginTransaction();
$pdo->exec("DROP TABLE usser_rile");


?>