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
    return view('welcome');
});

//PHP_lalavel_10 課題3
Route::get('XXX','AAAcontroller@bbb');


Route::group(['prefix' => 'admin','middleware' => 'auth'], function() {
  Route::get('news/create','Admin\NewsController@add');
  Route::post('news/create','Admin\NewsController@create');#追記１４
  Route::get('profile/create','Admin\ProfileController@add');
  Route::post('profile/create','Admin\ProfileController@create');#課題14-3
  Route::get('profile/edit','Admin\ProfileController@edit');
  Route::post('profile/edit','Admin\ProfileController@update');#課題14−６
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
