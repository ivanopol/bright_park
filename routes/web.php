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

/*Route::get('/', function () {
    return view('welcome');
});*/

Auth::routes();

Route::middleware(['auth'])->group(function () {
    Route::get('/{city?}', 'HomeController@index')->name('index');
    Route::get('/{city?}/{car_model}/{car_type}', 'HomeController@model')->name('model');
    Route::get('/{city?}/{car_model}/{car_type}/model_details', 'HomeController@model_details')->name('model_details');
    Route::get('/alt_menu', 'HomeController@alt_menu')->name('alt_menu');
    Route::get('/model_details', 'HomeController@model_details')->name('model_details');
    Route::get('/trade_in_calc', 'HomeController@trade_in_calc')->name('trade_in_calc');
    Route::get('/main', 'HomeController@main')->name('main');
    Route::get('/trade_in_credit', 'HomeController@trade_in_credit')->name('trade_in_credit');
    Route::get('/get_complectations/{brand_id}/{model_id}', 'HomeController@getComplectations')->name('get_complectations');
    Route::get('/trade_in_cash', 'HomeController@trade_in_cash')->name('trade_in_cash');
    Route::get('/get_brands', 'HomeController@get_brands')->name('get_brands');
    Route::get('/get_brand_models', 'HomeController@get_brand_models')->name('get_brand_models');
    Route::any('/send_contact_form', 'ContactFormController@sendContactForm')->name('sendContactForm');
    Route::post('/get_estimation', 'HomeController@getEstimation')->name('getEstimation');
});



