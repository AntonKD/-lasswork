<?php

$db = [
    'dbname' => 'items',
    'host' => 'localhost',
    'port' => '3306',
    'user' => 'root',
    'pwd' => '',
];

// data source name
$dsn = 'mysql:dbname=' . $db['dbname'] . ';host=' . $db['host'] . ';port=' . $db['port'];
$pdo = new PDO($dsn, $db['user'], $db['pwd']);

function exec_sql($sql, $vars = []): array
{
    global $pdo;
    $sth = $pdo->prepare($sql);
    $sth->execute($vars);

    $data = $sth->fetchAll(PDO::FETCH_ASSOC);
    $sth->closeCursor();
    return $data;
}

$str = 'qwertoisjdas';


for ($i = 0; $i < 100; $i++) {
    $name = str_shuffle($str);
    exec_sql('INSERT INTO `items` SET `name` = :name;', [':name' => $name]);
}

