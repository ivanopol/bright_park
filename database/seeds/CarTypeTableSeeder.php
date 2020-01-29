<?php


use Illuminate\Database\Seeder;

class CarTypeTableSeeder extends Seeder
{
    public function run()
    {
        $model_types = [
            ['title_ru' => 'Седан', 'title_en' => 'Sedan'],
            ['title_ru' => 'Хэтчбек', 'title_en' => 'Hatchback'],
            ['title_ru' => 'Лифтбек', 'title_en' => 'Liftback'],
            ['title_ru' => 'Универсал', 'title_en' => 'Universal'],
            ['title_ru' => 'Cross', 'title_en' => 'Cross'],
            ['title_ru' => 'Drive Active', 'title_en' => 'Drive Active'],
            ['title_ru' => 'SW', 'title_en' => 'SW'],
            ['title_ru' => 'SW Cross', 'title_en' => 'SW Cross'],
            ['title_ru' => 'CNG', 'title_en' => 'CNG'],
            ['title_ru' => 'Sport', 'title_en' => 'Sport'],
            ['title_ru' => '4х4 3 дв.', 'title_en' => '4x4 3 doors'],
            ['title_ru' => '4х4 3 Urban дв.', 'title_en' => '4x4 Urban 3 doors'],
            ['title_ru' => '4х4 5 дв.', 'title_en' => '4x4 5 doors'],
            ['title_ru' => '4х4 5 Urban дв.', 'title_en' => '4x4 Urban 5 doors'],
            ['title_ru' => '4х4 Bronto', 'title_en' => '4x4 Bronto'],
            ['title_ru' => 'Универсал CNG', 'title_en' => 'Universal CNG'],
            ['title_ru' => 'Cross CNG', 'title_en' => 'Cross CNG'],
            ['title_ru' => 'Фургон', 'title_en' => 'Minivan'],
            ['title_ru' => 'Фургон CNG', 'title_en' => 'Minivan CNG'],
            ['title_ru' => null, 'title_en' => null],
        ];

        DB::table('car_type')->insert($model_types);
    }
}
