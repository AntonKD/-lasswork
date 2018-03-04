<?php //validater_email.php

/*function validate_email($email) // не работает
{
    if(preg_match('/[.]{2}/',$email))
    {
        return false;
    }
    $pattern= '/^[a-z0-9]{1,}[._-a-z0-9]{1,}@[a-z0-9.]{2,}\.[a-z]{2,10}$/u';
    return (bool) preg_match($pattern, $email);

}

var_dump(validate_email('abc@abc.com'));
*/