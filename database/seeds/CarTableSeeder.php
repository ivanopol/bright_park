<?php

use Illuminate\Database\Seeder;

class CarTableSeeder extends Seeder
{
    public function run()
    {
        $model_types = [
            ['car_model_id' => '1', 'car_type_id' => '1', 'preview' => true, 'price' => 444900, 'special_price' => 378810],
            ['car_model_id' => '1', 'car_type_id' => '2', 'preview' => false, 'price' => 444900, 'special_price' => 378810],
            ['car_model_id' => '1', 'car_type_id' => '3', 'preview' => false, 'price' => 444900, 'special_price' => 378810],
            ['car_model_id' => '1', 'car_type_id' => '4', 'preview' => false, 'price' => 444900, 'special_price' => 378810],
            ['car_model_id' => '1', 'car_type_id' => '5', 'preview' => false, 'price' => 444900, 'special_price' => 378810],
            ['car_model_id' => '1', 'car_type_id' => '6', 'preview' => false, 'price' => 444900, 'special_price' => 378810],
            ['car_model_id' => '2', 'car_type_id' => '1', 'preview' => true, 'price' => 444900, 'special_price' => 378810],
            ['car_model_id' => '2', 'car_type_id' => '5', 'preview' => false, 'price' => 444900, 'special_price' => 378810],
            ['car_model_id' => '2', 'car_type_id' => '8', 'preview' => false, 'price' => 444900, 'special_price' => 378810],
            ['car_model_id' => '2', 'car_type_id' => '9', 'preview' => false, 'price' => 444900, 'special_price' => 378810],
            ['car_model_id' => '2', 'car_type_id' => '10', 'preview' => false, 'price' => 444900, 'special_price' => 378810],
            ['car_model_id' => '3', 'car_type_id' => '5', 'preview' => false, 'price' => 444900, 'special_price' => 378810],
            ['car_model_id' => '3', 'car_type_id' => '20', 'preview' => true, 'price' => 444900, 'special_price' => 378810],
            ['car_model_id' => '4', 'car_type_id' => '11', 'preview' => true, 'price' => 444900, 'special_price' => 378810],
            ['car_model_id' => '4', 'car_type_id' => '12', 'preview' => false, 'price' => 444900, 'special_price' => 378810],
            ['car_model_id' => '4', 'car_type_id' => '13', 'preview' => false, 'price' => 444900, 'special_price' => 378810],
            ['car_model_id' => '4', 'car_type_id' => '14', 'preview' => false, 'price' => 444900, 'special_price' => 378810],
            ['car_model_id' => '4', 'car_type_id' => '15', 'preview' => false, 'price' => 444900, 'special_price' => 378810],
            ['car_model_id' => '5', 'car_type_id' => '4', 'preview' => false, 'price' => 444900, 'special_price' => 378810],
            ['car_model_id' => '5', 'car_type_id' => '5', 'preview' => false, 'price' => 444900, 'special_price' => 378810],
            ['car_model_id' => '5', 'car_type_id' => '16', 'preview' => false, 'price' => 444900, 'special_price' => 378810],
            ['car_model_id' => '5', 'car_type_id' => '18', 'preview' => true, 'price' => 444900, 'special_price' => 378810],
            ['car_model_id' => '5', 'car_type_id' => '19', 'preview' => false, 'price' => 444900, 'special_price' => 378810],
        ];

        DB::table('car')->insert($model_types);
    }
}
