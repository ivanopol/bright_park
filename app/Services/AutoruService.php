<?php


namespace App\Services;


use Illuminate\Support\Facades\DB;
use Exception;
use Cache;


class AutoruService
{
    private $token = 'Vertis alphagarantPredict-280fe74a7d767b4f146e906ce90ce40b016838dd';

    private $cache;

    public $isError = false;

    private $error;

    private $url = 'https://apiauto.ru/1.0/';

    private $headers;

    public function __construct()
    {
    }

    /**
     * Получаем список брендов
     *
     * @return array
     */
    public function get_brands()
    {
        return $this->getCached('brands', function () {
            $brands = [];
            $res = $this->request('GET', 'search/cars/breadcrumbs', [
                'rid'   => 50,
                'state' => 'USED',
            ]);

            if (!$this->isError && !empty($res['breadcrumbs'][0]['entities'])) {
                foreach ($res['breadcrumbs'][0]['entities'] as $brand) {
                     DB::insert('insert into brands (code, title, logo) values(?, ?, ?)',
                        [
                            $brand['id'],
                            $brand['name'],
                            $brand['mark']['logo']['sizes']['logo'],
                        ]);
                }
            } else {
                throw new Exception('Brands collecting failed!');
            }

            $rows = DB::select('select `id`, `title` FROM `brands`');

            if ($rows) {
                foreach ($rows as $row) {
                    $brands[] = [
                        'id' => $row->id,
                        'title' => $row->title,
                    ];
                }
            }

            return $brands;
        });
    }

    /**
     * Запрос к Auto.ru
     *
     * @param string $method
     * @param string $url
     * @param array $data
     * @return array|mixed
     */
    private function request(string $method, string $url, array $data)
    {
        $this->headers = [
            'Content-Type: application/json; charset=utf-8',
            'x-authorization: ' . $this->token,
        ];

        $this->url .= $url;

        if ($method == 'GET') {
            $this->url .= '?' . http_build_query($data);
        }

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $this->url);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        if ($method == 'POST') {
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
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

    /**
     *
     *
     * @param $key
     * @param $callback
     * @return array
     */
    private function getCached($key, $callback) : array
    {
        if (Cache::has($key))
        {
            $data = json_decode(Cache::get($key), true);
        } else {
            $data = call_user_func($callback);
            Cache::put($key, json_encode($data));
        }

        return $data;
    }
}
