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

Route::prefix('/customer')->group(function () {
    Route::get('/index','CustomerController@index');
    Route::get("/repair","CustomerController@repair");
    Route::get("/delete","CustomerController@delete");
    Route::post("/index","CustomerController@destroy");
});

