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

// Редиректы
// Ретаргетинг и прочее
Route::get("/single-car-credit", function () { return redirect("/perm/stocks/lada_vesta_vygoda_10_po_gosprogramme"); });
Route::get("/volgograd/services/lada-4x4-vygoda-30000-rub", function () { return redirect("/volgograd/stocks/lada_granta_0_pervonachalnyj_vznos"); });
Route::get("/volgograd/services/programma-ecogas", function () { return redirect("/volgograd"); });
Route::get("/special/kalina-that-number", function () { return redirect("/perm/stocks/lada_vesta_vygoda_10_po_gosprogramme"); });
Route::get("/perm/credit-granta-hatchback", function () { return redirect("/perm/granta/sedan"); });
Route::get("/magnitogorsk/services/vesta-sw-cross-3-9-na-3-goda", function () { return redirect("/magnitogorsk/stocks/lada_vesta_vygoda_10_po_gosprogramme"); });
Route::get("/moscow/credit-granta-hatchback", function () { return redirect("/moscow/stocks/lada_granta_0_pervonachalnyj_vznos"); });
Route::get("/moscow/credit-granta-hatchback", function () { return redirect("/moscow/stocks/lada_granta_0_pervonachalnyj_vznos"); });
Route::get("/credit-granta-hatchback", function () { return redirect("/perm/granta/sedan"); });
Route::get("/moscow/special/kalina-that-number", function () { return redirect("/moscow/granta/sedan"); });
Route::get("/volgograd/lada/vesta/vesta-sw-cross", function () { return redirect("/volgograd/vesta/sw-cross"); });
Route::get("/volgograd/services/programma-trejd-in-dlya-avtomobilej-s-pts-2019-goda", function () { return redirect("/volgograd/stocks/lada_granta_0_pervonachalnyj_vznos"); });
Route::get("/moscow/single-car-credit", function () { return redirect("/moscow/stocks/lada_vesta_vygoda_10_po_gosprogramme"); });
Route::get("/{city}/lada-v-brajt-parke-na-osobyh-usloviyah", function ($city) { return redirect("/{$city->alias}/special_offers"); });
Route::get("/{city}/specialnoe-predlozhenie-moskva", function ($city) { return redirect("/{$city->alias}/special_offers"); });
Route::get("/{city}/services", function ($city) { return redirect("/{$city->alias}/stocks"); });
Route::get("/{city}/services/maksimalnaya-vygoda-po-gosprogrammam-pervyjsemejnyj-avtomobil", function ($city) { return redirect("/{$city->alias}/stocks/lada_vesta_vygoda_10_po_gosprogramme"); });
Route::get("/{city}/ocenka-avtomobilya", function ($city) { return redirect("/{$city->alias}/stocks/doplata_40_000_rublej_pri_obmene_na_lada_granta"); });
Route::get("/{city}/raschyot-kredita", function ($city) { return redirect("/{$city->alias}/stocks/lada_granta_0_pervonachalnyj_vznos"); });
Route::get("/{city}/stocks/doplata_40_000_rublej_pri_obmene_na_lada_granta", function ($city) { return redirect("/{$city->alias}/stocks/doplata-40000-rublej-pri-obmene-na-lada-granta"); });
Route::get("/{city}/stocks/lada_vesta_vygoda_10_po_gosprogramme", function ($city) { return redirect("/{$city->alias}/stocks/lada-vesta-vygoda-10-po-gosprogramme"); });
Route::get("/{city}/stocks/lada_granta_0_pervonachalnyj_vznos", function ($city) { return redirect("/{$city->alias}/stocks/lada-granta-0-pervonachalnyj-vznos"); });
Route::get("/{city}/stocks/obmen_na_lada_vesta_vyshe_rynochnoj_ceny", function ($city) { return redirect("/{$city->alias}/stocks/obmen-na-lada-vesta-vyshe-rynochnoj-ceny"); });
Route::get("/{city}/stocks/brajt_park_rabotaet_onlajn", function ($city) { return redirect("/{$city->alias}/stocks/brajt-park-rabotaet-onlajn"); });
Route::get("/{city}/news/lada_popular_in_finland", function ($city) { return redirect("/{$city->alias}/news/lada-popular-in-finland"); });
Route::get("/{city}/news/lada_50_years", function ($city) { return redirect("/{$city->alias}/news/lada-50-years"); });
Route::get("/{city}/news/lada_continue_modernisation", function ($city) { return redirect("/{$city->alias}/news/lada-continue-modernisation"); });
Route::get("/{city}/news/lada_kabriolet", function ($city) { return redirect("/{$city->alias}/news/lada-kabriolet"); });
Route::get("/{city}/news/niva_modification_in_germany", function ($city) { return redirect("/{$city->alias}/news/niva-modification-in-germany"); });
Route::get("/{city}/news/lada_sale_results", function ($city) { return redirect("/{$city->alias}/news/lada-sale-results"); });

// Granta
Route::get("/catalog/lada-granta", function () { return redirect("/perm/granta/sedan"); });
Route::get("/catalog/lada-granta/granta-sedan", function () { return redirect("/perm/granta/sedan"); });
Route::get("/catalog/lada-granta/granta-liftbek", function () { return redirect("/perm/granta/liftback"); });
Route::get("/catalog/lada-granta/granta-hetchbek", function () { return redirect("/perm/granta/sedan"); });
Route::get("/catalog/lada-granta/granta-universal", function () { return redirect("/perm/granta/sedan"); });
Route::get("/catalog/lada-granta/granta-cross", function () { return redirect("/perm/granta/cross"); });
Route::get("/catalog/lada-granta/granta-drive-active", function () { return redirect("/perm/granta/drive-active"); });

Route::get("/{city}/catalog/lada-granta", function ($city) { return redirect("/{$city->alias}/granta/sedan"); });
Route::get("/{city}/catalog/lada-granta/granta-sedan", function ($city) { return redirect("/{$city->alias}/granta/sedan"); });
Route::get("/{city}/catalog/lada-granta/granta-liftbek", function ($city) { return redirect("/{$city->alias}/granta/liftback"); });
Route::get("/{city}/catalog/lada-granta/granta-hetchbek", function ($city) { return redirect("/{$city->alias}/granta/sedan"); });
Route::get("/{city}/catalog/lada-granta/granta-universal", function ($city) { return redirect("/{$city->alias}/granta/sedan"); });
Route::get("/{city}/catalog/lada-granta/granta-cross", function ($city) { return redirect("/{$city->alias}/granta/cross"); });
Route::get("/{city}/catalog/lada-granta/granta-drive-active", function ($city) { return redirect("/{$city->alias}/granta/drive-active"); });

// Vesta
Route::get("/catalog/lada-vesta", function () { return redirect("/perm/vesta/sedan"); });
Route::get("/catalog/lada-vesta/vesta-sedan", function () { return redirect("/perm/vesta/sedan"); });
Route::get("/catalog/lada-vesta/vesta-cross", function () { return redirect("/perm/vesta/sedan"); });
Route::get("/catalog/lada-vesta/vesta-sw", function () { return redirect("/perm/vesta/sw"); });
Route::get("/catalog/lada-vesta/vesta-sw-cross", function () { return redirect("/perm/vesta/sw-cross"); });
Route::get("/catalog/lada-vesta/vesta-cng", function () { return redirect("/perm/vesta/sedan"); });
Route::get("/catalog/lada-vesta/vesta-sport", function () { return redirect("/perm/vesta/sedan"); });

Route::get("/{city}/catalog/lada-vesta", function ($city) { return redirect("/{$city->alias}/vesta/sedan"); });
Route::get("/{city}/catalog/catalog/lada-vesta/vesta-sedan", function ($city) { return redirect("/{$city->alias}/vesta/sedan"); });
Route::get("/{city}/catalog/lada-vesta/vesta-cross", function ($city) { return redirect("/{$city->alias}/vesta/sedan"); });
Route::get("/{city}/catalog/lada-vesta/vesta-sw", function ($city) { return redirect("/{$city->alias}/vesta/sw"); });
Route::get("/{city}/catalog/lada-vesta/vesta-sw-cross", function ($city) { return redirect("/{$city->alias}/vesta/sw-cross"); });
Route::get("/{city}/catalog/lada-vesta/vesta-cng", function ($city) { return redirect("/{$city->alias}/vesta/sedan"); });
Route::get("/{city}/catalog/lada-vesta/vesta-sport", function ($city) { return redirect("/{$city->alias}/vesta/sedan"); });

// XRAY
Route::get("/credit-xray", function () { return redirect("/perm/xray/xray"); });
Route::get("/catalog/lada-xray/xray", function () { return redirect("/perm/xray/xray"); });
Route::get("/catalog/lada-xray/xray-cross", function () { return redirect("/perm/xray/cross"); });

Route::get("/{city}/catalog/lada-xray/xray", function ($city) { return redirect("/{$city->alias}/xray/xray"); });
Route::get("/{city}/catalog/lada-xray/xray-cross", function ($city) { return redirect("/{$city->alias}/xray/cross"); });

// Largus
Route::get("/catalog/lada-largus", function () { return redirect("/perm/largus/universal"); });
Route::get("/catalog/lada-largus/largus-universal", function () { return redirect("/perm/largus/universal"); });
Route::get("/catalog/lada-largus/largus-universal-cng", function () { return redirect("/perm/largus/universal"); });
Route::get("/catalog/lada-largus/largus-cross", function () { return redirect("/perm/largus/universal"); });
Route::get("/catalog/lada-largus/largus-cross-cng", function () { return redirect("/perm/largus/universal"); });
Route::get("/catalog/lada-largus/largus-furgon", function () { return redirect("/perm/largus/universal"); });
Route::get("/catalog/lada-largus/largus-furgon-cng", function () { return redirect("/perm/largus/universal"); });

Route::get("/{city}/catalog/lada-largus", function ($city) { return redirect("/{$city->alias}/largus/universal"); });
Route::get("/{city}/catalog/lada-largus/largus-universal", function ($city) { return redirect("/{$city->alias}/largus/universal"); });
Route::get("/{city}/catalog/lada-largus/largus-universal-cng", function ($city) { return redirect("/{$city->alias}/largus/universal"); });
Route::get("/{city}/catalog/lada-largus/largus-cross", function ($city) { return redirect("/{$city->alias}/largus/universal"); });
Route::get("/{city}/catalog/lada-largus/largus-cross-cng", function ($city) { return redirect("/{$city->alias}/largus/universal"); });
Route::get("/{city}/catalog/lada-largus/largus-furgon", function ($city) { return redirect("/{$city->alias}/largus/universal"); });
Route::get("/{city}/catalog/lada-largus/largus-furgon-cng", function ($city) { return redirect("/{$city->alias}/largus/universal"); });

// 4x4
Route::get("/{city}/catalog/lada-4x4", function ($city) { return redirect("/{$city->alias}/4x4/three-doors"); });
Route::get("/{city}/catalog/lada-4x4/4x4-3-dv", function ($city) { return redirect("/{$city->alias}/4x4/three-doors"); });
Route::get("/{city}/catalog/lada-4x4/4x4-urban-3-dv", function ($city) { return redirect("/{$city->alias}/4x4/three-doors"); });
Route::get("/{city}/catalog/lada-4x4/4x4-5-dv", function ($city) { return redirect("/{$city->alias}/4x4/three-doors"); });
Route::get("/{city}/catalog/lada-4x4/4x4-urban-5-dv", function ($city) { return redirect("/{$city->alias}/4x4/three-doors"); });
Route::get("/{city}/catalog/lada-4x4/4x4-bronto", function ($city) { return redirect("/{$city->alias}/4x4/three-doors"); });

Route::get("/{city}/services/my-rabotaem", function ($city) { return redirect("/{$city->alias}"); });
Route::get("/{city}/services/lada-granta-s-garantiej-obratnogo-vykupa", function ($city) { return redirect("/{$city->alias}/granta/sedan"); });
Route::get("/{city}/services/lada-vesta-sedan-za-0-na-3-goda", function ($city) { return redirect("/{$city->alias}"); });
Route::get("/{city}/services/lada-vesta-s-garantiej-obratnogo-vykupa", function ($city) { return redirect("/{$city->alias}/vesta/sedan"); });
Route::get("/{city}/services/vygoda-do-80-000-r", function ($city) { return redirect("/{$city->alias}/stocks/doplata_40_000_rublej_pri_obmene_na_lada_granta"); });
Route::get("/{city}/contacts/payment", function ($city) { return redirect("/{$city->alias}/contacts"); });
Route::get("/{city}/contacts/sotrudniki", function ($city) { return redirect("/{$city->alias}/contacts"); });
Route::get("/{city}/services/vesta-s-max-vygodoj", function ($city) { return redirect("/{$city->alias}/vesta/sedan"); });
Route::get("/{city}/catalog/lada-xray", function ($city) { return redirect("/{$city->alias}/xray/xray"); });
Route::get("/{city}/services/lada-vesta-sedan-za-0-na-3-goda", function ($city) { return redirect("/{$city->alias}/vesta/sedan"); });
Route::get("/{city}/services/lada-xray-s-garantiej-obratnogo-vykupa", function ($city) { return redirect("/{$city->alias}/xray/xray"); });
Route::get("/{city}/contacts/sposoby-oplaty", function ($city) { return redirect("/{$city->alias}/contacts"); });
Route::get("/{city}/pokupka-lada-za-1-den", function ($city) { return redirect("/{$city->alias}"); });
Route::get("/{city}/services/sdelka-goda", function ($city) { return redirect("/{$city->alias}"); });
Route::get("/{city}/services/lada-xray-cross-0-na-3-goda", function ($city) { return redirect("/{$city->alias}/xray/xray"); });
Route::get("catalog/lada-vesta", function () { return redirect("/perm/vesta/sedan"); });
Route::get("/{city}/services/kreditnaya-programma-lada-finance", function ($city) { return redirect("/{$city->alias}"); });
Route::get("/{city}/catalog", function ($city) { return redirect("/{$city->alias}"); });
Route::get("/{city}/contacts/about", function ($city) { return redirect("/{$city->alias}/contacts"); });
Route::get("/lada/4x4/", function () { return redirect("/perm/4x4/three-doors"); });
Route::get("/lada/granta/sedan/", function () { return redirect("/perm/granta/sedan"); });
Route::get("/lada/kalina/", function () { return redirect("/perm"); });
Route::get("/lada/priora/", function () { return redirect("/perm"); });
Route::get("/lada/vesta/vesta-sedan/", function () { return redirect("/perm/vesta/sedan"); });
Route::get("/uvelskiy/contacts", function () { return redirect("/perm/contacts"); });

Route::get('send', 'FeedbackController@send');
Route::middleware(['utm.check', 'cookie.check', 'counter', 'cache.headers:private;max_age=3600'])->group(function () {
    Route::get('/{city}/about', 'HomeController@about')->name('about');
    Route::get('/{city}/privacy', 'HomeController@privacy')->name('privacy');
    Route::get('/{city}/stocks', 'HomeController@stocks')->name('stocks');
    Route::get('/{city}/stocks/{stocks_title}', 'HomeController@stocks_details')->name('stocks.one');
    Route::get('/{city}/news', 'HomeController@news')->name('news');
    Route::get('/{city}/news/{news_title}', 'HomeController@news_details')->name('news.one');
    Route::get('/{city?}', 'HomeController@index')->name('index');
    Route::get('/{city?}/special_offers', 'HomeController@special_offers')->name('special_offers');
    Route::get('/{city}/contacts', 'HomeController@contacts')->name('contacts');
    Route::get('/{city}/service', 'HomeController@service')->name('service');
    Route::get('/{city?}/{car_model}', 'HomeController@models')->name('models');
    Route::get('/{city?}/{car_model}/{car_type}', 'HomeController@model')->name('model');
    Route::get('/{city?}/{car_model}/{car_type}/model_details', 'HomeController@model_details')->name('model_details');
    Route::get('/alt_menu', 'HomeController@alt_menu')->name('alt_menu');
  //  Route::get('/model_details', 'HomeController@model_details')->name('model_details');
    Route::get('/{city?}/{car_model}/{car_type}/trade_in_calc', 'HomeController@trade_in_calc')->name('trade_in_calc');
    Route::get('/main', 'HomeController@main')->name('main');
    Route::get('/get_brands', 'HomeController@get_brands')->name('get_brands');
    Route::any('/send_contact_form', 'ContactFormController@sendContactForm')->name('sendContactForm');
    Route::any('/check_visitor_cookie', 'ContactFormController@checkVisitorCookie')->name('checkVisitorCookie');
});
