<?php
/**
 * Created by PhpStorm.
 * User: sana
 * Date: 6/3/2017
 * Time: 4:14 PM
 */

namespace App\Utility;


class Category
{
    const CHINIZARIN=1;
    const CRYSTAL=2;
    const DECORASION=3;
    const ELECTRONIC=4;
    const ARCOPAL=5;
    const ASHPAZKHANE=6;

    public static function getcats()
    {
        return [
            self::CHINIZARIN=>'چینی زرین',
            self::CRYSTAL=>'کریستال',
            self::DECORASION=>'دکوراسیون',
            self::ELECTRONIC=>'لوازم برقی خانگی ',
            self::ARCOPAL=>'آرکوپال',
            self::ASHPAZKHANE=>'لوازم آشپزخانه',
        ];

    }
}