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
    Route::get('/404','UserController@show404')->name('show404');

    Route::get('/cart','CartController@cart')->name('cart');


    Route::get('/cart/addcart/{product_id}','CartController@addcart')->name('addcart');
    Route::get('/cart/deletecart/{product_id}','CartController@deletecart')->name('deletecart');

    Route::get('/login','UserController@loginUser')->name('login');
    Route::post('/login','UserController@create')->name('login');

    Route::get('/contact_us','UserController@contact_us')->name('contact_us');
    Route::post('/contact_us','MessageController@save')->name('contact_us.message');

    Route::get('/about_us','UserController@about_us')->name('about_us');

    Route::get('/products','ProductController@show')->name('products');
    Route::get('/single_products','ProductController@showinfo')->name('single_products');

    Route::get('/checkout1','CheckoutController@checkout1')->name('checkout1');
    Route::post('/checkout1','CheckoutController@checkout1')->name('checkout1');

    Route::get('/checkout2','CheckoutController@checkout2')->name('checkout2');
    Route::post('/checkout2','CheckoutController@checkout2')->name('checkout2');

    Route::get('/checkout3','CheckoutController@checkout3')->name('checkout3');
    Route::post('/checkout3','CheckoutController@checkout3')->name('checkout3');

    Route::get('/checkout4','CheckoutController@checkout4')->name('checkout4');
    Route::post('/checkout4','CheckoutController@checkout4')->name('checkout4');

    Route::get('/search','SearchController@search')->name('search');


});
Route::group(['prefix'=> '/admin','namespace'=>'Admin'],function (){
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


Auth::routes();

Route::get('/home', 'HomeController@index');
