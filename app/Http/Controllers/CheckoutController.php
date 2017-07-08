<?php

namespace App\Http\Controllers;

use App\Order;
use App\User;
use App\Utility\userUtility;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CheckoutController extends Controller
{
    public function checkout1()
    {
        $id=auth()->id();
        $user=User::find($id);
        $cookie = userUtility::getcookie();
       /* $da=date('y-m-d');
        DB::table('orders')->insert(
            ['user_id' => $user->user_id, 'Date_order' => $da]
        );

        $Searchordre=DB::table('orders')->where([['user_id','=',$id],] )->get();

        $index=0;
       foreach ($Searchordre as $Searchor){
           $dd[]=$Searchor->order_id;
       }
       // ,['Date_order','=',$da ]
     foreach ($cookie['id'] as $coo ){
          $a=$coo;
          DB::table('product__orders')->insert(
              ['product_id' => $a,'order_id'=>$dd[$index],'number'=>1]);
         $index++;
      }*/

        return view('pages.checkOut1',compact('cookie','user'));
    }
    public function checkout2()
    {
        $cookie = userUtility::getcookie();
        return view('pages.checkOut2',compact('cookie'));
    }
    public function checkout3()
    {
        $cookie = userUtility::getcookie();
        return view('pages.checkOut3',compact('cookie'));
    }
    public function checkout4()
    {
        $cookie = userUtility::getcookie();
        return view('pages.checkOut4',compact('cookie'));
    }
}
