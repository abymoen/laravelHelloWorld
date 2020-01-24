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

/*
    THIS IS A COMMENT AND NOTHING WILL HAPPEN WITH IT

*/
Route::get('/aboutUs', 'hellowordController@aboutUs');
Route::get('/home', 'hellowordController@home');

Route::get('/oldPage', function () {
    return view('welcome');
});
