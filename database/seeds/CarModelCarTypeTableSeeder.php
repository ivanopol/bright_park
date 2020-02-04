<?php

use Illuminate\Database\Seeder;

class CarModelCarTypeTableSeeder extends Seeder
{
    public function run()
    {
        $model_types = [
            ['car_model_id' => '1', 'car_type_id' => '1', 'preview' => true ],
            ['car_model_id' => '1', 'car_type_id' => '2', 'preview' => false ],
            ['car_model_id' => '1', 'car_type_id' => '3', 'preview' => false ],
            ['car_model_id' => '1', 'car_type_id' => '4', 'preview' => false ],
            ['car_model_id' => '1', 'car_type_id' => '5', 'preview' => false ],
            ['car_model_id' => '1', 'car_type_id' => '6', 'preview' => false ],
            ['car_model_id' => '2', 'car_type_id' => '1', 'preview' => true ],
            ['car_model_id' => '2', 'car_type_id' => '5', 'preview' => false ],
            ['car_model_id' => '2', 'car_type_id' => '8', 'preview' => false ],
            ['car_model_id' => '2', 'car_type_id' => '9', 'preview' => false ],
            ['car_model_id' => '2', 'car_type_id' => '10', 'preview' => false ],
            ['car_model_id' => '3', 'car_type_id' => '5', 'preview' => false ],
            ['car_model_id' => '3', 'car_type_id' => '20', 'preview' => true ],
            ['car_model_id' => '4', 'car_type_id' => '11', 'preview' => false ],
            ['car_model_id' => '4', 'car_type_id' => '12', 'preview' => false ],
            ['car_model_id' => '4', 'car_type_id' => '13', 'preview' => true ],
            ['car_model_id' => '4', 'car_type_id' => '14', 'preview' => false ],
            ['car_model_id' => '4', 'car_type_id' => '15', 'preview' => false ],
            ['car_model_id' => '5', 'car_type_id' => '4', 'preview' => false ],
            ['car_model_id' => '5', 'car_type_id' => '5', 'preview' => false ],
            ['car_model_id' => '5', 'car_type_id' => '16', 'preview' => false ],
            ['car_model_id' => '5', 'car_type_id' => '18', 'preview' => true ],
            ['car_model_id' => '5', 'car_type_id' => '19', 'preview' => false ],
        ];

        DB::table('car_model_car_type')->insert($model_types);
    }
}
