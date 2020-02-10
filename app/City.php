<?php

namespace App;

use App\Services\GeoLocationService;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $fillable = ['title_en', 'title_ru', 'alias', 'coordinates'];
    /**
     * Таблица, связанная с моделью.
     *
     * @var string
     */
    protected $table = 'cities';

    private $city;
    private $geo_data;

    public function __construct(array $attributes = array())
    {
        parent::__construct($attributes);
        $geo_service = new GeoLocationService;
        $this->geo_data = $geo_service->get_user_city_by_ip($_SERVER['REMOTE_ADDR']);
        $this->city = strtolower($this->geo_data->alias);
    }

    /**
     * Получаем ключ роута для таблицы.
     *
     * @return string
     */
    public function getRouteKeyName() : string
    {
        return 'alias';
    }

    /**
     * Получаем город
     *
     * return string
     */
    public function getCity() : string
    {
        return $this->city;
    }

    /**
     * Получаем гео данные
     *
     * return array
     */
    public function getGeoData() : array
    {
        return $this->geo_data;
    }

    /**
     * Устанавливаем cookie
     *
     * @param string $city Город
     * @return bool
     */
    public function setCookie(string $city) : bool
    {

    }
}
