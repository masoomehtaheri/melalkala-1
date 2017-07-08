<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class admincontroller extends Controller
{
    public function index()
    {
        $stat=[
            "total_user"=>User::all()->count(),
            "total_post"=>0,
            "total_comments"=>0
        ];
        $page_data=[
            "panel_title"=>"داشبورد"
        ];
        return view('admin.dashboard.index' )->with(['stat'=>$stat,'page_data'=>$page_data]);

    }
}
