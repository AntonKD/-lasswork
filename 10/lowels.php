<?php
$str = 'LOVELS - Изображение Lovels Bistro, Upholland - TripAdvisor';

    function remove_vowels($str)
    {
        $pattern= '#[oiuyea\s]#i';
        return preg_replace($pattern, '',$str);
    }


    var_dump(remove_vowels($str));
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 26.09.2017
 * Time: 20:31
 */