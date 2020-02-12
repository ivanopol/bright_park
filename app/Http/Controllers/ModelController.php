<?php


use App\Services\AutoruService;
use App\Services\ModelService;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

/**
 * @property ModelService autoruService
 */
class ModelController extends Controller
{
    public function __construct(AutoruService $autoruService)
    {
        $this->autoruService = $autoruService;
        $this->middleware("auth");
    }

    public function get_brand_models(Request $request)
    {

        $brand_id = $request->input('model_id');

        var_dump($request);

        $models = $this->autoruService->getModels($brand_id);
        return Response::json(['models' => $models]);
    }

    public function getComplectations($brand_id, $model_id)
    {
        return Response::json(['modifications'=>$this->autoruService->getComplectations($brand_id, $model_id)]);
    }

    public function getEstimation(Request $request)
    {
        $data = $request->getContent();
        return Response::json(['estimation'=>$this->autoruService->getEstimation($data)]);
    }

    public function getYearsRange()
    {
        $getYearsRange = $this->autoruService->getYearsRange();
        return Response::json(['yearsRange' => $getYearsRange]);
    }

    public function getMileageRange()
    {
        $getMileageRange = $this->autoruService->getMileageRange();
        return Response::json(['mileageRange' => $getMileageRange]);
    }
}
