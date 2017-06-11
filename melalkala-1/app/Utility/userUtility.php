<?php
namespace App\Utility;
/**
 * Created by PhpStorm.
 * User: sana
 * Date: 5/28/2017
 * Time: 2:23 AM
 */

class userUtility
{
const ADMIN=1;
const AUTHOR=2;
const SUBSCRIBER=3;

    public static function getroles()
    {
        return [
            self::ADMIN=>'مدیر',
            self::AUTHOR=>'نویسنده',
            self::SUBSCRIBER=>'کاربر',
        ];
        
}
}