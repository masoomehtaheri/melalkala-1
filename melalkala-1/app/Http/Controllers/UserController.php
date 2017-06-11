<?php

namespace App\Http\Controllers;
use App\Http\Requests\AdminRequests\CreateEditRequest;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('pages.index');
    }

    public function zarin()
    {
        return view('pages.zarin');
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
