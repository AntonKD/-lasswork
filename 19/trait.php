<?php

trait destroy{
    public function create(){
        var_dump(__METHOD__); //destroy::create
      // var_dump(__CLASS__); //Createble
    }
}
trait db{
    private function create()
    {
        var_dump(__METHOD__);
    }
}
trait logger{
    protected function create()
    {
        var_dump(__METHOD__);
    }
}

class Createble
{
    use destroy, logger,db{

        db::create insteadof destroy, logger;
        /*db::create insteadof destroy;
        db::create insteadof logger;*/
        logger::create as logger_create;
        //destroy::create as protected create2;
        //destroy::create as public create2;



    }
    public function recreate()
    {
        $this->create();
        $this->logger_create();
    }
}

$c = new Createble();
$c->recreate();
//$c->create2();


