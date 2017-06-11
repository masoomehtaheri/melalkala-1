<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class admincontroller extends Controller
{
    public function index()
    {
        $stat=[
            "total_user"=>124,
            "total_post"=>254,
            "total_comments"=>458
        ];
        $page_data=[
            "panel_title"=>"داشبورد"
        ];
        return view('admin.dashboard.index' )->with(['stat'=>$stat,'page_data'=>$page_data]);

    }
}
