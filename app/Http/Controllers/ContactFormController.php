<?php


namespace App\Http\Controllers;


use App\Services\BitrixService;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ContactFormController extends \Illuminate\Routing\Controller
{
    private $bitrix_service;

    public function __construct(BitrixService $bitrix_service)
    {
        $this->bitrix_service = $bitrix_service;
    }

    public function sendContactForm(Request $request)
    {
        try {
            $this->bitrix_service->sendContactForm($request->getContent());
            return Response::HTTP_OK;
        } catch (Exception $e){
            var_dump($e);
            return Response::HTTP_BAD_REQUEST;
        }
    }
}
