<?php
$db =[

    'dbname'=>'mysql',
    'host'=>'http://localhost',
    'port'=>'3306',
    'user'=>'root',
    'pwd'=>'111',
];

//data source name
$dsn= 'mysql:dbname='.$db['dbname'].';host= '.$db['host'].';port='.$db['port'];
$pdo = new PDO($dsn, $db['user'], $db['pwd']);

$sth= $pdo->prepare('SELECT * From `users` WHERE `User_login`=:PRIOR LIMIT 1' );
$sth->execute(['User_id'=>2]);
$data=$st->fetchAll(PDO::FETCH_ASSOC);

var_dump($data);