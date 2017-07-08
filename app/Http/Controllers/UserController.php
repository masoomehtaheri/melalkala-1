<?php

namespace App\Http\Controllers;
use App\Http\Requests\AdminRequests\CreateEditRequest;
use App\products;
use App\User;
use App\Utility\userUtility;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index()
    {

        return view('pages.index');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function zarin()
    {
        /*$zarinProducts=DB::table('products')->where('cat','=',1)->get()->paginate(3);*/
        $zarinProducts=products::where('cat','=',1)->paginate(3);
        return view('pages.zarin',compact('zarinProducts'));
    }
    public function login()
    {
        return view('pages.login');
    }
    public function wishlist()
    {
        return view('pages.wishlist');
    }
    public function show404()
    {
        return view('pages.404');
    }



    public function create(CreateEditRequest $createEditRequest)
    {
        $cratedUser=User::create($createEditRequest->except(['password_confirmation','checkbox']));

        if($cratedUser instanceof User){

            return redirect()->route('index' )->with( ['insertSuccess'=>true]);
        }

    }

    public function contact_us()
    {
        return view('pages.contact_us');
    }

    public function about_us()
    {
        return view('pages.about_us');
    }
}
