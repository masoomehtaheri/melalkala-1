<?php

namespace App\Http\Controllers;

use App\Utility\userUtility;
use Illuminate\Http\Request;

class test extends Controller
{
    public function s()
    {
//         $id=0;
//        $compactID=array(2,3,4,5);
        userUtility::$compactID[]=5;
        userUtility::$compactID[]=6;
        return dd(  userUtility::$compactID);
    }
}
