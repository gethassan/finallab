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


Route::get('regist', function () {
    return view('register');
});
Route::get('cart', function () {
    return view('cart');
});
Route::get('orderform', function () {
    return view('orderform');
});
Route::get('/', 'CategoryController@showcat');
Route::get('index', 'CategoryController@showcat');
Route::get("cartfun{id}","CategoryController@cartfun");
Route::get("showcart","CategoryController@showcart");
Route::get("deletecart{id}","CategoryController@deletecart");
Route::post("updatecart{id}","CategoryController@updatecart");
Route::get("orderform","CategoryController@fillorder");
Route::get("billview","usercont@billview");
Route::post("reg","usercont@register");
Route::post("placeorder","usercont@order");


Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
