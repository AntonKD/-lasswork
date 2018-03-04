<?php
// case 1 - absolute path
//require_once "sabnamespace.php";
////require_once "aplication.php";
//
//$user = new \Application\Model\User\userModel();
//$user->setName('Syslik');
//echo $user->getName();

// case 2 - relative path
//namespace Application;
//require_once "sabnamespace.php";
//$user = new namespace\Model\User\userModel();
//$user->setName("Pyshok");
//var_dump($user);

// case 3 - partial path
//namespace Application\Model;
//require_once "sabnamespace.php";
//$user = new User\userModel();
//$user->setName("syrik");
//var_dump($user);

// case 4 - inmport path // правельный вариант
//namespace Run;
//require_once "sabnamespace.php";
//use Application\Model\User;
//$user_Model = new User\userModel();
//$user_Model->setName("tapok");
//var_dump($user_Model);
