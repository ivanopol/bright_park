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

//Auth::routes();

// Редиректы
// Ретаргетинг и прочее
Route::get('/perm/lada-v-brajt-parke-na-osobyh-usloviyah/', function () { return redirect('/perm/special_offers/'); });
Route::get('/moscow/lada-v-brajt-parke-na-osobyh-usloviyah/', function () { return redirect('/moscow/special_offers/'); });
Route::get('/yekaterinburg/lada-v-brajt-parke-na-osobyh-usloviyah/', function () { return redirect('/yekaterinburg/special_offers/'); });
Route::get('/volgograd/lada-v-brajt-parke-na-osobyh-usloviyah/', function () { return redirect('/volgograd/special_offers/'); });
Route::get('/magnitogorsk/lada-v-brajt-parke-na-osobyh-usloviyah/', function () { return redirect('/magnitogorsk/special_offers/'); });
Route::get('/rostov-na-donu/lada-v-brajt-parke-na-osobyh-usloviyah/', function () { return redirect('/rostov-na-donu/special_offers/'); });
Route::get('/perm/services/', function () { return redirect('/perm/stocks/'); });
Route::get('/perm/services/maksimalnaya-vygoda-po-gosprogrammam-pervyjsemejnyj-avtomobil/', function () { return redirect('/perm/stocks/lada_vesta_vygoda_10_po_gosprogramme'); });
Route::get('/perm/ocenka-avtomobilya/', function () { return redirect('/perm/stocks/doplata_40_000_rublej_pri_obmene_na_lada_granta/'); });
Route::get('/perm/raschyot-kredita/', function () { return redirect('/perm/stocks/lada_granta_0_pervonachalnyj_vznos/'); });

// Granta
Route::get('/perm/catalog/lada-granta/', function () { return redirect('/perm/granta/sedan/'); });
Route::get('/perm/catalog/lada-granta/granta-sedan/', function () { return redirect('/perm/granta/sedan/'); });
Route::get('/perm/catalog/lada-granta/granta-liftbek/', function () { return redirect('/perm/granta/liftback/'); });
Route::get('/perm/catalog/lada-granta/granta-hetchbek/', function () { return redirect('/perm/granta/sedan/'); });
Route::get('/perm/catalog/lada-granta/granta-universal/', function () { return redirect('/perm/granta/sedan/'); });
Route::get('/perm/catalog/lada-granta/granta-cross/', function () { return redirect('/perm/granta/cross/'); });
Route::get('/perm/catalog/lada-granta/granta-drive-active/', function () { return redirect('/perm/granta/drive-active/'); });

// Vesta
Route::get('/perm/catalog/lada-vesta/', function () { return redirect('/perm/vesta/sedan/'); });
Route::get('/perm/catalog/catalog/lada-vesta/vesta-sedan/', function () { return redirect('/perm/vesta/sedan/'); });
Route::get('/perm/catalog/lada-vesta/vesta-cross/', function () { return redirect('/perm/vesta/sedan/'); });
Route::get('/perm/catalog/catalog/lada-vesta/vesta-sw/', function () { return redirect('/perm/vesta/sw/'); });
Route::get('/perm/catalog/lada-vesta/vesta-sw-cross/', function () { return redirect('/perm/vesta/sw-cross/'); });
Route::get('/perm/catalog/lada-vesta/vesta-cng/', function () { return redirect('/perm/vesta/sedan/'); });
Route::get('/perm/catalog/lada-vesta/vesta-sport/', function () { return redirect('/perm/vesta/sedan/'); });

// XRAY
Route::get('/perm/catalog/lada-xray/xray/', function () { return redirect('/perm/xray/xray/'); });
Route::get('/perm/catalog/lada-xray/xray-cross/', function () { return redirect('/perm/xray/cross/'); });

// Largus
Route::get('/perm/catalog/lada-largus/', function () { return redirect('/perm/largus/universal/'); });
Route::get('/perm/catalog/lada-largus/largus-universal/', function () { return redirect('/perm/largus/universal/'); });
Route::get('/perm/catalog/lada-largus/largus-universal-cng/', function () { return redirect('/perm/largus/universal/'); });
Route::get('/perm/catalog/lada-largus/largus-cross/', function () { return redirect('/perm/largus/universal/'); });
Route::get('/perm/catalog/lada-largus/largus-cross-cng/', function () { return redirect('/perm/largus/universal/'); });
Route::get('/perm/catalog/lada-largus/largus-furgon/', function () { return redirect('/perm/largus/universal/'); });
Route::get('/perm/catalog/lada-largus/largus-furgon-cng/', function () { return redirect('/perm/largus/universal/'); });

// Largus
Route::get('/perm/catalog/lada-largus/', function () { return redirect('/perm/largus/universal/'); });
Route::get('/perm/catalog/lada-largus/largus-universal/', function () { return redirect('/perm/largus/universal/'); });
Route::get('/perm/catalog/lada-largus/largus-universal-cng/', function () { return redirect('/perm/largus/universal/'); });
Route::get('/perm/catalog/lada-largus/largus-cross/', function () { return redirect('/perm/largus/universal/'); });
Route::get('/perm/catalog/lada-largus/largus-cross-cng/', function () { return redirect('/perm/largus/universal/'); });
Route::get('/perm/catalog/lada-largus/largus-furgon/', function () { return redirect('/perm/largus/universal/'); });
Route::get('/perm/catalog/lada-largus/largus-furgon-cng/', function () { return redirect('/perm/largus/universal/'); });

// 4x4
Route::get('/perm/catalog/lada-4x4/', function () { return redirect('/perm/4x4/three-doors/'); });
Route::get('/perm/catalog/lada-4x4/4x4-3-dv/', function () { return redirect('/perm/4x4/three-doors/'); });
Route::get('/perm/catalog/lada-4x4/4x4-urban-3-dv/', function () { return redirect('/perm/4x4/three-doors/'); });
Route::get('/perm/catalog/lada-4x4/4x4-5-dv/', function () { return redirect('/perm/4x4/three-doors/'); });
Route::get('/perm/catalog/lada-4x4/4x4-urban-5-dv/', function () { return redirect('/perm/4x4/three-doors/'); });
Route::get('/perm/catalog/lada-4x4/4x4-bronto/', function () { return redirect('/perm/4x4/three-doors/'); });


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
