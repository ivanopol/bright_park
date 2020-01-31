<?php


namespace App\Services;

use Illuminate\Support\Facades\DB;
use Torann\GeoIP\Facades\GeoIP;

/**
 * @property GeoIP geo_ip
 */
class GeoLocationService
{
    public function __construct()
    {
    }

    public function get_user_city_by_ip(string $ip_address)
    {
        $title_en = geoip($ip=null)->getLocation($ip_address)->getAttribute('city');

        $city = DB::selectOne("select * from city where title_en = :title_en", ['title_en'=>$title_en]);

        if($city == null){
            return Response::json(DB::select("select * from city where title_en = :title_en", ['title_en'=>$title_en]));
        }

        return geoip($ip=null)->getLocation($ip_address)->getAttribute('city');
    }
}
