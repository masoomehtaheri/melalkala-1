<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\AdminRequests\CreateEditRequest;
use App\products;
use App\Utility\Category;
use App\Utility\colors;
use Illuminate\Http\Request;
use App\Http\Requests\AdminRequests\ProductRequest;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function index(Request $request)
    {

        $page_data=[
            "panel_title"=>"لیست محصولات"
        ];
        $products=products::all();
        return view('admin.product.index',compact('products') )->with(['page_data'=>$page_data]);
    }


    public function create()
    {
        $page_data=[
            "panel_title"=>"اضافه کردن محصول جدید"
        ];
        $pro_cat=Category::getcats();
        $colors=colors::getcolors();
        return view('admin.product.create',compact('pro_cat','colors'))->with(['page_data'=>$page_data]);
    }



    public function store(ProductRequest $productRequest)
    {
        $product_data=$productRequest->all();
        $file=$productRequest->file('image');
        $new_file_name=microtime(true).".".$file->getClientOriginalExtension();
//        dd($new_file_name);
        $productRequest->file('image')->storeAs('images',$new_file_name);
        $product_data['image']=$new_file_name;
        $new=products::create($product_data);
        if($new instanceof products){

            return redirect()->route('admin.product.index' )->with( ['insertSuccess'=>true]);
        }

    }


    public function remove(Request $request,$pro_id)
    {
        if(ctype_digit($pro_id)){

            $pro=products::find($pro_id);
            if (is_null($pro)){
                return redirect()->route('admin.product.index')->with('failDelete',true);
            }
            $result=$pro->delete();
            if ($result){
                return redirect()->route('admin.product.index')->with(['deleteSuccess'=>true]);
            }

        }
    }


    public function edit($pro_id)
    {
        if (!ctype_digit($pro_id)){

        }
        $page_data=[
            "panel_title"=>"ویرایش محصولات"
        ];
        $pro_cat=Category::getcats();
        $colors=colors::getcolors();
        $product=products::find($pro_id);
//dd($product);
//$img=$product->image;
//dd($img);
//if('storage'.'/images/'.){
//
//}
        return view('admin.product.edit',compact('product','pro_cat','page_data','colors'));

    }

    public function update($pro_id,ProductRequest $productRequest)
    {
        $inputs=$productRequest->except('$pro_id');

//        $file=$productRequest->file('image');
//        $new_file_name=microtime(true).".".$file->getClientOriginalExtension();
//        $productRequest->file('image')->storeAs('images',$new_file_name);
//        $product_data['image']=$new_file_name;
//        $new=products::create($product_data);
////
//      products::find($pro_id)->create($product_data);
        products::find($pro_id)->update($inputs);
        return redirect()->route('admin.product.index')->with(['updateSuccess'=>true]);
    }
}
