<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $name= $request->input('name');
        $SearchProducts=DB::table('products')->where('name','like',$name)->get();
        if ($SearchProducts !='null'){
            return view('pages.search',compact('SearchProducts'));
        }
        else{
            return view('pages.index')->with( ['notexists'=>true]);
        }

    }
}
