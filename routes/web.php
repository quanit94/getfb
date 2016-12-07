<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
//    echo 'xxx';
    return view('welcome');
});



Route::group(['middleware' => 'web'], function () {
//    Route::auth();
//    Route::get('/', 'PagesController@index');
//    Route::get('terms-of-service', 'PagesController@terms');
//    Route::get('privacy', 'PagesController@privacy');
//    Route::get('combo', 'PagesController@combo');
    Route::get('/admin', [
       'uses' => 'AdminController@index',
       'as'  => 'admin'
    ]);

    Route::get('/login', [
       'uses' => 'AuthController@index',
       'as'  => 'login'
    ]);

});


//Route::get('/admin', 'AdminController@index');