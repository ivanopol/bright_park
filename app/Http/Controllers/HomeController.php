<?php

namespace App\Http\Controllers;


use App\Services\AutoruService;
use App\Services\BasePageService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Http\RedirectResponse;
use App\CarModel;
use App\CarType;
use App\City;
use App\Http\Router\CityPath;

class HomeController extends Controller
{
    public $city;

    /**
     * Create a new controller instance.
     *
     * @param Request $request
     */
    public function __construct( Request $request)
    {
    }

    /**
     * Show the application dashboard.
     *
     * @param City|null $city
     */
    public function index(City $city = null)
    {
         if ($city['alias']) {
            $this->city = $city['alias'];
        } else {
            return redirect()->route('index', ['city' => 'perm']);
        }

        $cities = $city->getCities($this->city);

        $models = CarModel::with('types_preview')->get();

        return view('home', ['models' => $models, 'city' => $this->city, 'cities' => $cities]);
    }

    /**
     * Show first version of design.
     *
     * @param City|null $city
     * @param CarModel $car_model
     * @param CarType $car_type
     * @return mixed
     */
    public function model(City $city = null, CarModel $car_model, CarType $car_type)
    {
        if ($city['alias']) {
            $this->city = $city['alias'];
        } else {
            return redirect()->route('model', ['city' => 'perm', 'car_model' => $car_model->slug, 'car_type' => $car_type->slug]);
        }

        $cities = $city->getCities($this->city);

        $service = new BasePageService();

        $models = CarModel::with('types_preview')->get();

        $data = $service->get_base_page_data($car_model, $car_type, $this->city);
        $data['coordinates'] = explode(",", $city['coordinates']);



        return view('model', [ 'data' => $data, 'models' => $models, 'city' => $this->city, 'cities' => $cities]);
    }

    public function model_details(City $city = null, CarModel $car_model, CarType $car_type)
    {
        if ($city['alias']) {
            $this->city = $city['alias'];
        } else {
            return redirect()->route('model_details', ['city' => 'perm', 'car_model' => $car_model->slug, 'car_type' => $car_type->slug]);
        }

        $cities = $city->getCities($this->city);
        $models = CarModel::with('types_preview')->get();

        $raw = new AutoruService();
        $brands = $raw->getBrands();
        return view('model_details', [ 'brands' => $brands, 'models' => $models, 'city' => $this->city, 'cities' => $cities]);
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
        return Response::json(['models' => $models]);
    }

    public function getComplectations($brand_id, $model_id)
    {
        $raw = new AutoruService();

        return Response::json(['modifications'=>$raw->getComplectations($brand_id, $model_id)]);
    }

    public function getEstimation(Request $request)
    {
        $raw = new AutoruService();
        $data = $request->getContent();
        return Response::json(['estimation'=>$raw->getEstimation($data)]);
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
