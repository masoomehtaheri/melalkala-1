<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::group(['prefix'=>'/'],function (){
    Route::get('/','UserController@index')->name('index');

    Route::get('/zarin','UserController@zarin')->name('zarin');
    Route::get('/wishlist','UserController@wishlist')->name('wishlist');

    Route::get('/cart','CartController@cart')->name('cart')->middleware('auth');


    Route::get('/cart/addcart/{product_id}','CartController@addcart')->name('addcart');
    Route::get('/cart/deletecart/{product_id}','CartController@deletecart')->name('deletecart');


    Route::get('/contact_us','UserController@contact_us')->name('contact_us');
    Route::post('/contact_us','MessageController@save')->name('contact_us.message');

    Route::get('/about_us','UserController@about_us')->name('about_us');

    Route::get('/products','ProductController@show')->name('products');
    Route::get('/t','test@s')->name('s');


    Route::get('/checkout1/','CheckoutController@checkout1')->name('checkout1');
    Route::post('/checkout1/','CheckoutController@checkout1')->name('checkout1');

    Route::get('/checkout2','CheckoutController@checkout2')->name('checkout2');
    Route::post('/checkout2','CheckoutController@checkout2')->name('checkout2');

    Route::get('/checkout3','CheckoutController@checkout3')->name('checkout3');
    Route::post('/checkout3','CheckoutController@checkout3')->name('checkout3');

    Route::get('/checkout4','CheckoutController@checkout4')->name('checkout4');
    Route::post('/checkout4','CheckoutController@checkout4')->name('checkout4');

    Route::get('/search','SearchController@search')->name('search');
    Route::get('/singleproduct/{pro_id}', 'SearchController@show_single')->name('product.single');


});
Route::group(['prefix'=> '/admin','namespace'=>'Admin','middleware'=>['admin','auth']],function (){
    Route::get('/','admincontroller@index')->name('admin.dashboard.index');
    Route::get('/users', 'usercontroller@index')->name('admin.users.index');
    Route::get('/users/create', 'usercontroller@create')->name('admin.users.create');
    Route::post('/users/create', 'usercontroller@store')->name('admin.users.create');
    Route::get('/users/delete/{user_id}', 'usercontroller@remove')->name('admin.users.remove');
    Route::get('/users/edit/{user_id}', 'usercontroller@edit')->name('admin.users.edit');
    Route::post('/users/edit/{user_id}', 'usercontroller@update')->name('admin.users.update');



    Route::get('/product', 'ProductController@index')->name('admin.product.index');

    Route::get('/product/create', 'ProductController@create')->name('admin.product.create');
    Route::post('/product/create', 'ProductController@store')->name('admin.product.create');
    Route::get('/product/delete/{pro_id}', 'ProductController@remove')->name('admin.product.remove');
    Route::get('/product/edit/{pro_id}', 'ProductController@edit')->name('admin.product.edit');
    Route::post('/product/edit/{pro_id}', 'ProductController@update')->name('admin.product.update');




});

Route::get('/film', 'filmcontroller@index')->name('film1');
Auth::routes();

Route::get('/home', 'UserController@index');
/****************************************************** getway   **************************************/
Route::get('/request','requestcontroller@index')->name('request');

Route::any('callback/from/bank',function(){
    /*try {

        $gateway = \Gateway::verify();
        $trackingCode = $gateway->trackingCode();
        $refId = $gateway->refId();
        $cardNumber = $gateway->cardNumber();

        // عملیات خرید با موفقیت انجام شده است
        // در اینجا کالا درخواستی را به کاربر ارائه میکنم


    } catch (Exception $e) {

        echo $e->getMessage();
    }*/
});
Route::get('/finish','show_finish_basketcontroller@index')->name('finish');
Route::get('/done',function(){
    return view('done');
});