<?php
class Logger
{
   //  private $msg=' ';
   protected $msg='';
     public function __construct($msg)
     {
         $this->msg=$msg;
     }

    public function log()
     {
         echo $this->msg;
     }
}

class mySQL_Logger extends Logger
{
/*    public function __construct($msg)
    {
        $this->msg=$msg;
    }*/

  // protected $msg=' ';
//   public function __construct($msg)
//   {
//
//   }

   public function log()
    {
        $this->log_to_mySQL($this->msg);
        //parent::log(); // TODO: Change the autogenerated stub
    }

    public function log_to_mySQL($msg)
    {

      var_dump(__CLASS__, __METHOD__,$msg);

    }
}

$msg= __FILE__."  dasd ".__LINE__;
$logger = new mySQL_Logger($msg);
$logger->log();
//var_dump($logger->msg);