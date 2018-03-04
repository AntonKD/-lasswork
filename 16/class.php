<?php
class test
{
    public function __construct($color = 'green')
    {
    var_dump($color);
    }


    static public function getNew()
    {
        return new static();
    }
}


class Apple extends  test
{

   private $weight = 10;
private  $color;

   public function __construct($color = 'red')
   {
       parent::__construct($color);
       $this->$color=$color;
   }

    public function __clone()
   {
      $this->weight=10;
   }

    public function getWeight():int
 {

     return $this->weight;
 }
 public  function setWeight(int $weight)
      {
     $this->weight=$weight;
     return $this;
 }

}



$apple= Apple::getNew();
$apple=new Apple('green');
$weight=$apple->setWeight(25)->getWeight();

/*
$apple->setWeight(25);
$weight=$apple->getWeight();
*/

//$apple2 = new $apple;
//var_dump($apple2);

//var_dump($weight);
//$apple->Weight=20;
$test1= new Test();
/*
var_dump(
    $apple,
    $test1,
    $test == $test1,
    $test===$test1
);*/

$apple2=clone $apple;

var_dump($apple2);
/*
var_dump(
    $apple2 instanceof Apple,
    $apple2 instanceof Test
);*/