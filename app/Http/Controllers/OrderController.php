<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function show($pid,$userid)
    {
return view('pages.checkOut1');

    }
}
