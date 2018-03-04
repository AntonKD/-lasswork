<?php
class Box
{
   protected const CODE="box-xyz";

    public function print_box()
    {
        //return self::CODE; //perent, self, static,
        return static::CODE; //perent, self, static,
    }

}

class triangelBox extends Box
{
 protected const CODE = "box-triangele";

}
$triangle_box=new triangelBox();
$box= new Box();
//var_dump($triangle_box);
//$triangle_box::CODE="box";

var_dump($triangle_box->print_box());
echo "</br>";
var_dump($box->print_box());