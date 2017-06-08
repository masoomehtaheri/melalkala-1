<?php
/**
 * Created by PhpStorm.
 * User: sana
 * Date: 6/7/2017
 * Time: 1:28 PM
 */

namespace App\Utility;


class colors
{
    const WHITE=1;
    const BLACK=2;
    const RED=3;
    const SILVER=4;
    const GREEN=5;
    const BLUE=6;
    const YELLOW=7;

    public static function getcolors()
    {
        return [
            self::WHITE=>'سفید',
            self::BLACK=>'مشکی',
            self::RED=>'قرمز',
            self::SILVER=>'نقره ای ',
            self::GREEN=>'سبز',
            self::BLUE=>'آبی',
        ];

    }
}