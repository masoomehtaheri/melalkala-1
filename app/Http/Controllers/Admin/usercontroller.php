<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Illuminate\Http\Request;
use App\Http\Requests\AdminRequests\CreateEditRequest;
use App\Utility\userUtility;
use App\Http\Controllers\Controller;

class usercontroller extends Controller
{
    public function index(Request $request)
    {

        $page_data=[
            "panel_title"=>"لیست کاربران"
        ];
       $users=User::all();
        return view('admin.users.index',compact('users') )->with(['page_data'=>$page_data]);
    }


    public function create()
    {
        $page_data=[
            "panel_title"=>"ایجاد کاربر جدید"
        ];
        $user_role=userUtility::getroles();
        return view('admin.users.create',compact('user_role'))->with(['page_data'=>$page_data]);
    }



    public function store(CreateEditRequest $createEditRequest)
    {
        $cratedUser=User::create($createEditRequest->except(['password_confirmation',]));
        if($cratedUser instanceof User){

            return redirect()->route('admin.users.index' )->with( ['insertSuccess'=>true]);
        }

    }


    public function remove(Request $request,$user_id)
    {
        if(ctype_digit($user_id)){

            $user=User::find($user_id);
            if (is_null($user)){
                return redirect()->route('admin.users.index')->with('failDelete',true);
            }
            $result=$user->delete();
            if ($result){
                return redirect()->route('admin.users.index')->with(['deleteSuccess'=>true]);
            }

        }
    }


    public function edit($user_id)
    {
        if (!ctype_digit($user_id)){

        }
        $page_data=[
            "panel_title"=>"ویرایش کاربر"
        ];
        $user_role=userUtility::getroles();
        $user=User::find($user_id);
        return view('admin.users.edit',compact('user','user_role','page_data'));

    }

    public function update(CreateEditRequest $createEditRequest,$user_id)
    {
        $inputs=$createEditRequest->except('user_id');
        if(!$createEditRequest->has('password')){
            $inputs=$createEditRequest->except(['password','password_confirmation','user_id']);
        }
        User::find($user_id)->update($inputs);
        return redirect()->route('admin.users.index')->with(['updateSuccess'=>true]);
    }

}
