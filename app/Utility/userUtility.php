<?php
namespace App\Utility;
use Illuminate\Support\Facades\Cookie;

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
protected static $count=0;

    public static function getroles()
    {
        return [
            self::ADMIN=>'مدیر',
            self::AUTHOR=>'نویسنده',
            self::SUBSCRIBER=>'کاربر',
        ];
        
}



    public static $cookie;


    public static function getcookie(){

        return self::$cookie = Cookie::get('pp');

    }
   /* public function setcookie(){
       return self::$cookie = null;

   }*/




}
