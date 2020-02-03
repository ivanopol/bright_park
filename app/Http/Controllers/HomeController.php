<?php

namespace App\Http\Controllers;

use App\Services\AutoruService;
use App\Services\BasePageService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

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

        return view('basic', ['data' => $data]);
    }

    public function model_details()
    {
        $raw = new AutoruService();
        $brands = $raw->getBrands();
        var_dump($raw->getGenerations(6));
        return view('model_details', ['brands' => $brands]);
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

    public function get_brand_models($brand_id)
    {
        $raw = new AutoruService();
        $models = $raw->getModels($brand_id);
        return Response::json(['models' => $models]);
    }

    public function getComplectations($brand_id, $model_id)
    {
        $raw = new AutoruService();
        return $raw->getComplectations($brand_id, $model_id);
    }

    public function getEstimations($data)
    {
        $raw = new AutoruService();
        return $raw->getEstimations($data);
    }

    public function getYearsRange()
    {
        $raw = new AutoruService();
        $getYearsRange = $raw->getYearsRange();
        return Response::json(['yearsRange' => $getYearsRange]);
    }

    public function getMileageRange()
    {
        $raw = new AutoruService();
        $getMileageRange = $raw->getMileageRange();
        return Response::json(['mileageRange' => $getMileageRange]);
    }
}
