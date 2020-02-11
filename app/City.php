<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Torann\GeoIP\Facades\GeoIP;
use Illuminate\Support\Facades\DB;

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
    }

    /**
     * Получаем город по умолчанию
     *
     * @return array
     */
    public function defaultCity() : array
    {
        return (array) DB::selectOne("SELECT *
                                     FROM `cities`
                                     LEFT JOIN `contacts` `c` ON `c`.`city_id`=`cities`.`id`
                                     WHERE `alias` = :alias", ['alias'=> self::DEFAULT_CITY]);

    }

    /**
     * Получаем город по IP-адресу посетителя
     *
     * @param string $ip IP-адрес
     * @return array
     */
    public function getCityByIP(string $ip) : array
    {
        $alias = geoip($ip=null)->getLocation($ip)->getAttribute('city');
        return (array) DB::selectOne("SELECT *
                                      FROM `cities`
                                      LEFT JOIN `contacts` `c` ON `c`.`city_id`=`cities`.`id`
                                      WHERE `alias`=:alias", ['alias'=>$alias]);
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