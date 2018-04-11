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
    return view('responses.create');
});

Route::get('/share/{id}', ['as'=>'share.show','uses'=>'ResponseController@share']);
Route::get('/global', ['as'=>'global.show','uses'=>'ResponseController@getGlobal']);
Route::resource('responses', 'ResponseController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
