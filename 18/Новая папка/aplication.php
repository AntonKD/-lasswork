<?php
namespace A{

    $a=10;
    function strlen(string $s):bool {
        //echo __METHOD__;
        return true;
    }
    var_dump(strlen('123'));
    const c= 'c';

    class user{
        public  $var='user 1';
    }
}

namespace b{

    use A\user as User1;
    use A\user;
    use A as A1;

    echo "</br>";
    $u= new User();
    var_dump($u);

    echo "</br>";
    $ua1= new A1\User();
    var_dump($ua1);


    echo "</br>";
    $u1 =new User1();
    var_dump($u1);

    echo "</br>";
    $user = new \A\user();
    var_dump($user);

   //0 echo  A\strlen('123');//error
   //  var_dump(\A\C);
}
//
//var_dump();

namespace A{

    $user = new User();
    echo "</br>";
    var_dump($user);
}