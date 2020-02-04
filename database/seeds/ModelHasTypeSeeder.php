<?php


use Illuminate\Database\Seeder;

class ModelHasTypeSeeder extends Seeder
{
    public function run()
    {
        $model_types = [
            ['car_model_id' => '1', 'car_type_id' => '1'],
            ['car_model_id' => '1', 'car_type_id' => '2'],
            ['car_model_id' => '1', 'car_type_id' => '3'],
            ['car_model_id' => '1', 'car_type_id' => '4'],
            ['car_model_id' => '1', 'car_type_id' => '5'],
            ['car_model_id' => '1', 'car_type_id' => '6'],
            ['car_model_id' => '2', 'car_type_id' => '1'],
            ['car_model_id' => '2', 'car_type_id' => '5'],
            ['car_model_id' => '2', 'car_type_id' => '8'],
            ['car_model_id' => '2', 'car_type_id' => '9'],
            ['car_model_id' => '2', 'car_type_id' => '10'],
            ['car_model_id' => '3', 'car_type_id' => '5'],
            ['car_model_id' => '3', 'car_type_id' => '20'],
            ['car_model_id' => '4', 'car_type_id' => '11'],
            ['car_model_id' => '4', 'car_type_id' => '12'],
            ['car_model_id' => '4', 'car_type_id' => '13'],
            ['car_model_id' => '4', 'car_type_id' => '14'],
            ['car_model_id' => '4', 'car_type_id' => '15'],
            ['car_model_id' => '5', 'car_type_id' => '4'],
            ['car_model_id' => '5', 'car_type_id' => '5'],
            ['car_model_id' => '5', 'car_type_id' => '16'],
            ['car_model_id' => '5', 'car_type_id' => '18'],
            ['car_model_id' => '5', 'car_type_id' => '19'],
        ];

        DB::table('model_has_types')->insert($model_types);
    }
}
