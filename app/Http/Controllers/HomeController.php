<?php

namespace App\Http\Controllers;

use App\Services\AutoruService;
use App\Services\BasePageService;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
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

    public function main()
    {
        return view('main');
    }

    /**
     * Show first version of design.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function basic()
    {
        $service = new BasePageService();

        $data = $service->get_base_page_data();

        return view('basic', [ 'data' => $data ]);
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
