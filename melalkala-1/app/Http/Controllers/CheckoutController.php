<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function checkout1()
    {
        return view('pages.checkOut1');
    }
    public function checkout2()
    {
        return view('pages.checkOut2');
    }
    public function checkout3()
    {
        return view('pages.checkOut3');
    }
    public function checkout4()
    {
        return view('pages.checkOut4');
    }
}
