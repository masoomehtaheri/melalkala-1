<?php

namespace App\Http\Controllers;

use App\products;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show()
    {
        $products=products::all();
//        dd($products);
        return view('pages.products',compact('products'));
    }
    public function showinfo()
    {

        return view('pages.single_product');
    }
}
