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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/model_details', 'HomeController@model_details')->name('model_details');
Route::get('/basic', 'HomeController@basic')->name('basic');
Route::get('/alt_menu', 'HomeController@alt_menu')->name('alt_menu');
Route::get('/trade_in_calc', 'HomeController@trade_in_calc')->name('trade_in_calc');


