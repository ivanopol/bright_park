<?php

namespace App\Http\Controllers;

use App\Services\AutoruService;
use App\Services\BasePageService;
use Illuminate\Http\Request;
use App\Services\GeoLocationService;
use Illuminate\Support\Facades\URL;

class HomeController extends Controller
{
    public $geo_service;
    public $geo_data;
    /**
     * Create a new controller instance.
     *
     *
     */
    public function __construct(GeoLocationService $geo_service, Request $request)
    {
/*        $this->middleware('auth');
        $this->geo_service = $geo_service;
        $this->geo_data = $this->geo_service->get_user_city_by_ip($_SERVER['REMOTE_ADDR']);
        $city = strtolower($this->geo_data->alias);
        $route = $city . "/" . $request->path();
        echo redirect($route);*/
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    /**
     * Show first version of design.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function model()
    {
        $service = new BasePageService();

        $data = $service->get_base_page_data();

        return view('model', [ 'data' => $data ]);
    }

    public function model_details()
    {
        $raw = new AutoruService();
        $brands = $raw->getBrands();
        return view('model_details', [ 'brands' => $brands]);
    }

    public function trade_in_calc()
    {
        return view('trade_in_calc');
    }

    public function trade_in_credit()
    {
        return view('trade_in_credit');
    }

    public function trade_in_cash()
    {
        return view('trade_in_cash');
    }

    public function get_brands()
    {
    }

    public function get_brand_models(Request $request)
    {

        $brand_id = $request->input('model_id');

        $raw = new AutoruService();
        $models = $raw->getModels($brand_id);

        echo json_encode($models);
    }
}
