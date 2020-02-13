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
    public function __construct(Request $request)
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

        $models = CarModel::with('types_preview')->get();

        return view('home', ['models' => $models, 'city' => $this->city]);
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

        $service = new BasePageService();

        $data = $service->get_base_page_data($car_model, $car_type, $this->city);
        $data['coordinates'] = explode(",", $city['coordinates']);

        return view('model', ['data' => $data, 'city' => $this->city]);
    }

    public function model_details(City $city = null, CarModel $car_model, CarType $car_type)
    {
        if ($city['alias']) {
            $this->city = $city['alias'];
        } else {
            return redirect()->route('model_details', ['city' => 'perm',
                'car_model' => $car_model->slug,
                'car_type' => $car_type->slug]);
        }

        $raw = new AutoruService();
        $brands = $raw->getBrands();
        return view('model_details', ['brands' => $brands, 'city' => $this->city]);
    }

    public function trade_in_calc(City $city = null, CarModel $car_model, CarType $car_type)
    {
        if ($city['alias']) {
            $this->city = $city['alias'];
        } else {
            return redirect()->route('trade_in_calc', ['city' => 'perm',
                'car_model' => $car_model->slug,
                'car_type' => $car_type->slug]);
        }
        return redirect()->route('trade_in_calc', ['city' => 'perm', 'car_model' => $car_model->slug, 'car_type' => $car_type->slug]);
    }

    public function trade_in_credit(City $city = null, CarModel $car_model, CarType $car_type)
    {
        if ($city['alias']) {
            $this->city = $city['alias'];
        } else {
            return redirect()->route('trade_in_credit', ['city' => 'perm',
                'car_model' => $car_model->slug,
                'car_type' => $car_type->slug]);
        }
        return redirect()->route('trade_in_credit', ['city' => 'perm', 'car_model' => $car_model->slug, 'car_type' => $car_type->slug]);
    }

    public function trade_in_cash()
    {
        return view('trade_in_cash');
    }
}
