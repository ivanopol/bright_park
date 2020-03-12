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

//use Spatie\Sitemap\SitemapGenerator;

/*Route::get('/', function () {
    return view('welcome');
});*/


/*Route::any('/sitemap.xml', function() {
    ini_set('max_execution_time', 500);
    SitemapGenerator::create(config('app.url'))->setConcurrency(1)->writeToFile("sitemap.xml");
    return 'completed';
});*/

Auth::routes();

Route::middleware(['auth', 'cookie.check', 'counter'])->group(function () {
    Route::get('/{city?}', 'HomeController@index')->name('index');
    Route::get('/{city?}/special_offers', 'HomeController@special_offers')->name('special_offers');
    Route::get('/{city?}/{car_model}/{car_type}', 'HomeController@model')->name('model');
    Route::get('/{city?}/{car_model}/{car_type}/model_details', 'HomeController@model_details')->name('model_details');
    Route::get('/alt_menu', 'HomeController@alt_menu')->name('alt_menu');
    Route::get('/model_details', 'HomeController@model_details')->name('model_details');
    Route::get('/{city?}/{car_model}/{car_type}/trade_in_calc', 'HomeController@trade_in_calc')->name('trade_in_calc');
    Route::get('/main', 'HomeController@main')->name('main');
    Route::get('/{city?}/{car_model}/{car_type}/trade_in_credit', 'HomeController@trade_in_credit')->name('trade_in_credit');
    Route::get('/trade_in_cash', 'HomeController@trade_in_cash')->name('trade_in_cash');
    Route::get('/get_brands', 'HomeController@get_brands')->name('get_brands');
    Route::any('/send_contact_form', 'ContactFormController@sendContactForm')->name('sendContactForm');
    Route::any('/check_visitor_cookie', 'ContactFormController@checkVisitorCookie')->name('checkVisitorCookie');
    Route::get('/{city}/news', 'HomeController@news')->name('news');
    Route::get('/{city}/news/{news_title}', 'HomeController@news_detail')->name('news_details');
});
