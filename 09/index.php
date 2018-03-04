<?php

Session_start();
require_once "./function.php";

if(!is_user_logged_in())
{  //показать форма ввода логина-пароля
  if(isset($_POST['submit_login']))
  {
      $error=[];
      $login = $_POST['login'];
      $password = $_POST['password'];
      if(strlen($login)>16 || strlen($login)<5)
      { $error['login']= 'поле login должен быть от 5 до 16 символов';

      }
      if(strlen($password)>12 || strlen($password)<7)
      { $error['password']= 'поле password должен быть от 7 до 12 символов';

      }

      if(empty($error))
      {
        login_in();
        header('location : index.php');
      }
  }

   include "login.html";
}   else {
    if(!empty($_POST['log_out'])){
        log_out();
        header('location : index.php ');
    }
//показать личній кабинет
    include './profile.html';
}

