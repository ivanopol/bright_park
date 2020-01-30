<?php


namespace App\Services;


use Illuminate\Support\Facades\DB;

class AutoruService
{
    private $token = 'Vertis alphagarantPredict-280fe74a7d767b4f146e906ce90ce40b016838dd';

    private $cache;

    public $isError = false;

    private $error;

    private $url = 'https://apiauto.ru/1.0/';

    private $method;

    private $data;

    private $headers;

    public function __construct($method, $url, $data)
    {
    }

    /**
     * Получаем список брендов
     *
     * @return array
     */
    public function get_brands() : array
    {
        $brands = [];

        $brands = $this->request('GET', 'search/cars/breadcrumbs', [
            'rid'   => 50,
            'state' => 'USED',
        ]);

        if (!$this->isError && !empty($raw['breadcrumbs'][0]['entities'])) {
            foreach ($raw['breadcrumbs'][0]['entities'] as $brand) {

            }
        } else {
            throw new Exception('Brands collecting failed!');
        }

        return $brands;
    }

    /**
     * Запрос к Auto.ru
     *
     * @return array|mixed
     */
    public function request(string $method, string $url, array $data) : array
    {
        $this->headers = [
            'Content-Type: application/json; charset=utf-8',
            'x-authorization: ' . $this->token,
        ];

        $this->method = $method;

        $this->data = $data;

        if ($this->method == 'GET') {
            $this->url .= '?' . http_build_query($this->data);
        }

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $this->url);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        if ($this->method == 'POST') {
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($this->data));
        }

        curl_setopt($ch, CURLOPT_HTTPHEADER, $this->headers);

        $result = curl_exec($ch);
        $json = json_decode($result, true);
        $code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);

        if (empty($json) || $code != 200) {
            $this->error = $code . ' Unprocessed error';
            $this->isError = true;
            return [];
        }

        if ($json['status'] != 'SUCCESS') {
            $this->error = $code . ' ' . $json['detailed_error'];
            $this->isError = true;
        }

        return $json;
    }
}
