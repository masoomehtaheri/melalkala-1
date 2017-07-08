<?php

namespace App\Http\Controllers;

use App\products;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show()
    {
        $products=products::paginate(9);
//        dd($products);
        return view('pages.products',compact('products'));
    }


}
