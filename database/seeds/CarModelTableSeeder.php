<?php


use Illuminate\Database\Seeder;

class CarModelTableSeeder extends Seeder
{
    public function run()
    {
        $models = [
            ['title' => 'Granta'],
            ['title' => 'Vesta'],
            ['title' => 'X-Ray'],
            ['title' => '4x4'],
            ['title' => 'Largus'],
        ];

        DB::table('car_model')->insert($models);
    }
}
