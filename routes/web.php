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
https://brightpark.ru/volgograd/
//Auth::routes();
Route::get('/perm/lada-v-brajt-parke-na-osobyh-usloviyah/', function () { return redirect('/perm/special_offers/'); });
Route::get('/moscow/lada-v-brajt-parke-na-osobyh-usloviyah/', function () { return redirect('/moscow/special_offers/'); });
Route::get('/yekaterinburg/lada-v-brajt-parke-na-osobyh-usloviyah/', function () { return redirect('/yekaterinburg/special_offers/'); });
Route::get('/volgograd/lada-v-brajt-parke-na-osobyh-usloviyah/', function () { return redirect('/volgograd/special_offers/'); });
Route::get('/magnitogorsk/lada-v-brajt-parke-na-osobyh-usloviyah/', function () { return redirect('/magnitogorsk/special_offers/'); });
Route::get('/rostov-na-donu/lada-v-brajt-parke-na-osobyh-usloviyah/', function () { return redirect('/rostov-na-donu/special_offers/'); });

Route::get('/perm/catalog/lada-granta/', function () { return redirect('/perm/granta/sedan/'); });
Route::get('/perm/catalog/lada-granta/granta-sedan/', function () { return redirect('/perm/granta/sedan/'); });
Route::get('/perm/catalog/lada-granta/granta-liftbek/', function () { return redirect('/perm/granta/liftback/'); });
Route::get('/perm/catalog/lada-granta/granta-hetchbek/', function () { return redirect('/perm/granta/sedan/'); });
Route::get('/perm/catalog/lada-granta/granta-universal/', function () { return redirect('/perm/granta/sedan/'); });
Route::get('/perm/catalog/lada-granta/granta-cross/', function () { return redirect('/perm/granta/cross/'); });
Route::get('/perm/catalog/lada-granta/granta-drive-active/', function () { return redirect('/perm/granta/drive-active/'); });


Route::middleware(['cookie.check', 'counter'])->group(function () {
    Route::get('/{city}/stocks', 'HomeController@stocks')->name('stocks');
    Route::get('/{city}/stocks/{stocks_title}', 'HomeController@stocks_details')->name('stocks.one');
    Route::get('/{city}/news', 'HomeController@news')->name('news');
    Route::get('/{city}/news/{news_title}', 'HomeController@news_details')->name('news.one');
    Route::get('/{city?}', 'HomeController@index')->name('index');
    Route::get('/{city?}/special_offers', 'HomeController@special_offers')->name('special_offers');
    Route::get('/{city?}/{car_model}/{car_type}', 'HomeController@model')->name('model');
    Route::get('/{city?}/{car_model}/{car_type}/model_details', 'HomeController@model_details')->name('model_details');
    Route::get('/alt_menu', 'HomeController@alt_menu')->name('alt_menu');
    Route::get('/model_details', 'HomeController@model_details')->name('model_details');
    Route::get('/{city?}/{car_model}/{car_type}/trade_in_calc', 'HomeController@trade_in_calc')->name('trade_in_calc');
    Route::get('/main', 'HomeController@main')->name('main');
    Route::get('/get_brands', 'HomeController@get_brands')->name('get_brands');
    Route::any('/send_contact_form', 'ContactFormController@sendContactForm')->name('sendContactForm');
    Route::any('/check_visitor_cookie', 'ContactFormController@checkVisitorCookie')->name('checkVisitorCookie');
    Route::get('/{city}/contacts', 'HomeController@contacts')->name('contacts');
});
