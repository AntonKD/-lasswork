<?php
class Logger
{
    public static $msg='';
    public function log()
    {
        var_dump(static::$msg);
    }
}

function prosses()
{
    Logger::$msg=__FUNCTION__;
    Logger::log();
}


function prosses_end()
{
    Logger::$msg=__FUNCTION__;
    Logger::log();
}


prosses();
prosses_end();


$logger=new Logger();

var_dump(Logger::$msg);