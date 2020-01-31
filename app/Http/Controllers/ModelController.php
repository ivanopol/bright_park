<?php


use App\Services\ModelService;
use Illuminate\Routing\Controller;

/**
 * @property ModelService model_service
 */
class ModelController extends Controller
{
    public function __construct(ModelService $model_service)
    {
        $this->model_service = $model_service;
        $this->middleware("auth");
    }

    public function basic()
    {
        $data = $this->model_service->get_model_page_view_data();

        return view('basic', [ 'data' => $data ]);
    }
}
