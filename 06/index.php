<?php

function print_full_name(string $first_name, string $last_name) : void

{

    echo $first_name." ".$last_name;


}

$last_name ='Ivanov';
$first_name ='Iva';
$func = 'print_full_name';

//$func($first_name, $last_name);
//print_full_name($first_name, $last_name);
call_user_func($func,$first_name, $last_name ); // для вывода динамических значения




global $file;

$list =

    [
        'first_name' => $name,
        'last_name' => $surname,
        'position' => $pos,

    ];

foreach ($list as $person)

{
    fputcsv($file, $person);

}

fclose($file);