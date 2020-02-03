<?php


namespace App\Http\Controllers;


use App\Services\BitrixService;

class ContactFormController extends \Illuminate\Routing\Controller
{
    private $bitrix_service;

    public function __construct(BitrixService $bitrix_service)
    {
        $this->bitrix_service = $bitrix_service;
    }

    public function sendForm($data)
    {
        $this->bitrix_service->sendFeedbackForm($data);
    }
}
