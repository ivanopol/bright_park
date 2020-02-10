<?php


use Illuminate\Database\Seeder;

class CarPricesTableSeeder extends Seeder
{
    public function run()
    {
        $prices = [];

        DB::table('car_models')->insert($prices);
    }
}
