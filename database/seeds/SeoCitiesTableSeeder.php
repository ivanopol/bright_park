<?php

use Illuminate\Database\Seeder;

class SeoCitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $seo_cities = [
            [
                'seo_id' => 1,
                'city_id' => 0,
            ],
            [
                'seo_id' => 2,
                'city_id' => 0,
            ],
            [
                'seo_id' => 3,
                'city_id' => 0,
            ],
            [
                'seo_id' => 4,
                'city_id' => 0,
            ],
            [
                'seo_id' => 5,
                'city_id' => 0,
            ],
            [
                'seo_id' => 6,
                'city_id' => 0,
            ],
            [
                'seo_id' => 7,
                'city_id' => 0,
            ],
            [
                'seo_id' => 8,
                'city_id' => 0,
            ],
            [
                'seo_id' => 9,
                'city_id' => 0,
            ],
            [
                'seo_id' => 10,
                'city_id' => 0,
            ],
            [
                'seo_id' => 11,
                'city_id' => 0,
            ],
            [
                'seo_id' => 12,
                'city_id' => 0,
            ],
            [
                'seo_id' => 13,
                'city_id' => 0,
            ],
            [
                'seo_id' => 14,
                'city_id' => 0,
            ],
        ];
        DB::table('seo_cities')->insert($seo_cities);
    }
}
