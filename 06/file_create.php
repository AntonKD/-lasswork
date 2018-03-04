<?php
$list=[
    'nanme'=>'41241243',
    'rqrqr'=>'fasdfa',
];

function create($list)

{
    $file = fopen("file.csv", "w+");

    foreach ($list as $person)
    {

        fputcsv($file, $person);


    }

    fclose($file);
}








