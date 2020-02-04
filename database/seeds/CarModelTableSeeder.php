<?php


use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CarModelTableSeeder extends Seeder
{
    public function run()
    {
        $models = [
            ['title' => 'Granta', 'slug' => Str::slug('Granta')],
            ['title' => 'Vesta', 'slug' => Str::slug('Vesta')],
            ['title' => 'X-Ray', 'slug' => Str::slug('X-Ray')],
            ['title' => '4x4', 'slug' => Str::slug('4x4')],
            ['title' => 'Largus', 'slug' => Str::slug('Largus')],
        ];

        DB::table('car_models')->insert($models);
    }
}
