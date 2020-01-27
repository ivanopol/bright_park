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

Route::any('/basic', 'HomeController@basic')->name('basic');
Route::any('/alt_menu', 'HomeController@alt_menu')->name('alt_menu');
Route::any('/model_details', 'HomeController@model_details')->name('model_details');
Route::any('/basic', 'HomeController@basic')->name('basic');
Route::any('/alt_menu', 'HomeController@alt_menu')->name('alt_menu');
Route::any('/trade_in_calc', 'HomeController@trade_in_calc')->name('trade_in_calc');
Route::any('/main', 'HomeController@main')->name('main');
Route::any('/trade_in_credit', 'HomeController@trade_in_credit')->name('trade_in_credit');


