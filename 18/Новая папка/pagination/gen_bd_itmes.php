<?php

$db =[

    'dbname'=>'user',
    'host'=>'http://localhost',
    'port'=>'3306',
    'user'=>'root',
    'pwd'=>'',
];

//data source name
$dsn= 'mysql:dbname='.$db['dbname'].';host= '.$db['host'].';port='.$db['port'];
$pdo = new PDO($dsn, $db['user'], $db['pwd']);
function exec_sql($sql, $vars = [])
{

    global  $pdo;
    $sth = $pdo->prepare($sql);
    $sth->execute($vars);

    $data= $sth->fetchAll(PDO::FETCH_ASSOC);
    $sth->closeCursor();
    return $data;
}
$str = 'dqwdadvsadgad';
for ($i= 0; $i<1000; $i++)
{
  $name =str_shuffle($str);
 // exec_sql('INSERT INTO `Items` SET `name`);
}