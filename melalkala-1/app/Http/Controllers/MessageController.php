<?php

namespace App\Http\Controllers;

use App\Messages;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function save(Request $request)
    {
       $messages= Messages::create($request->all());
       if($messages instanceof Messages){
           return view('pages.contact_us')->with(['delivery'=>true]);
       }
    }
}
