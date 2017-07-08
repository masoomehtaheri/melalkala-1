<?php

namespace App\Http\Controllers;

use App\products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $name= $request->input('name');
//        dd($name);
        $SearchProducts=DB::table('products')->where('name','like','%'.$name.'%')->get();
//        dd($SearchProducts);
        if ($SearchProducts !='null'){
            return view('pages.search',compact('SearchProducts'));
        }
        else{
            return view('pages.index')->with( ['notexists'=>true]);
        }


    }



    public function show_single($pro_id)
    {
        $products=products::find($pro_id);
        return view('pages.single_product',compact('products'));
    }
}
