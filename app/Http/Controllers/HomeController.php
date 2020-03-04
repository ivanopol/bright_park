<?php

namespace App\Http\Controllers;


use App\CarModelCarType;
use App\Services\AutoruService;
use App\Services\BasePageService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\CarModel;
use App\CarType;
use App\City;

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

/*        echo "<pre>";
        print_r($data);
        echo "</pre>";*/

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

        $car_attrs = CarModelCarType::where([
            ['car_model_id', '=', $car_model->id],
            ['car_type_id', '=', $car_type->id],
        ])->limit(1)->get();

        $credit_programs = DB::select('select name, percent_rate from credit_programs');

        $raw = new AutoruService();
        $brands = $raw->getBrands();
        return view('model_details', [
            'brands' => $brands,
            'models' => $models,
            'city' => $this->city,
            'cities' => $cities,
            'car_model' => $car_model,
            'car_type' => $car_type,
            'car_attrs' => $car_attrs,
        ]);
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
        return view('trade_in_calc', ['city' => 'perm', 'car_model' => $car_model->slug, 'car_type' => $car_type->slug]);
    }

    public function trade_in_credit(City $city = null, CarModel $car_model, CarType $car_type)
    {
        $data = ['city' => 'perm', 'car_model' => $car_model->slug, 'car_type' => $car_type->slug,
            'car' =>
                DB::select("select * from car_model_car_type where `car_model_id` = :car_model_id and `car_type_id` = :car_type_id",
                    ['car_model_id'=>$car_model->getAttribute('id'), 'car_type_id'=>$car_type->getAttribute('id')])];

        if ($city['alias']) {
            $this->city = $city['alias'];
        } else {
            return redirect()->route('trade_in_calc', ['city' => 'perm',
                'car_model' => $car_model->slug,
                'car_type' => $car_type->slug]);
        }

        return view('trade_in_credit', ['data'=>$data, 'city'=>$this->city]);
    }

    public function trade_in_cash()
    {
        return view('trade_in_cash');
    }
}
