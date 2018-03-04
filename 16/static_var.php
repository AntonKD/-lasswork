<?php
function get_nan_calls()
{
    static $calls = 0;

    $calls++;

    return $calls;
}

for($i=0;$i<10;$i++)
{
    get_nan_calls();
}
echo  get_nan_calls();
echo "</br>";
//var_dump($calls);