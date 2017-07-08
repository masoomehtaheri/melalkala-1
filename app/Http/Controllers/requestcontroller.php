<?php

namespace App\Http\Controllers;

use App\User;
use App\Utility\userUtility;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\DB;

class requestcontroller extends Controller
{
   public function index(){
       $cookie = userUtility::getcookie();
       $id=auth()->id();
       $user=User::find($id);

      $da=date('y-m-d');
      DB::table('orders')->insert(
         ['user_id' => $user->user_id, 'Date_order' => $da]
    );

    $Searchordre=DB::table('orders')->where([['user_id','=',$id],] )->get();

     $index=0;
     foreach ($Searchordre as $Searchor){
         $dd[]=$Searchor->order_id;
     }

     foreach ($cookie['id'] as $coo ){
         $a=$coo;
        DB::table('product__orders')->insert(['product_id' => $a,'order_id'=>$dd[$index],'number'=>1]);
         $index++;
     }
       $adad=null;
       \Illuminate\Support\Facades\Cookie::queue("pp",$adad);
       $cookie= Cookie::forget('pay_product_cart');
       return redirect('/finish')->withCookie($cookie);
      /* try {

           $gateway = \Gateway::mellat();
           $gateway->setCallback(url('callback/from/bank'));
           $gateway->price(1000)->ready();
           $refId =  $gateway->refId();
           $transID = $gateway->transactionId();

           // Your code here

           return $gateway->redirect();

       } catch (Exception $e) {

           echo $e->getMessage();
       }*/
     //return view ('Template.request')->withCookie($cookie);
   }
}
