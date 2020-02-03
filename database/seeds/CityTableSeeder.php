<?php

use Illuminate\Database\Seeder;

class CityTableSeeder extends Seeder
{
    public function run()
    {
        $cities = [
            ['title_ru' => 'Пермь', 'title_en' => 'Perm'],
            ['title_ru' => 'Москва', 'title_en' => 'Moscow'],
            ['title_ru' => 'Магнитогорск', 'title_en' => 'Magnitogorsk'],
            ['title_ru' => 'Ростов-на-Дону', 'title_en' => 'Rostov-na-donu'],
            ['title_ru' => 'Екатеринбург', 'title_en' => 'Yekaterinburg'],
            ['title_ru' => 'Волгоград', 'title_en' => 'Volgograd'],
        ];

        DB::table('city')->insert($cities);
    }
}
