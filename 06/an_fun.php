<?php

    $min=5; $max=10;


    $fun = function ()use ($min, $max)

    {
        return rand($min,$max);
    };


    echo $fun();

?>