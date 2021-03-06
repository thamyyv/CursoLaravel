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

Route::get('/', function () {
    return view('Layouts/LayoutFull');
});

Route::get('/teste', 'TestController@index');

Route::resource('/client', 'Clients\ClientController');

Route::resource('/book', 'BookController');