<?php

    function array_multiply(array &$array = null, int $multiplier = 2 ):array
    {

        foreach ($array as $k => $v)
        {

         $array[$k] = $v * $multiplier;

        }

        return $array;

    }

    $arr = range(1,5);

    array_multiply($arr);
    array_multiply($arr, 3);
    var_dump($arr);
echo "</br>";

