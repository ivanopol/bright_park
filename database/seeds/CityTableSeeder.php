<?php

use Illuminate\Database\Seeder;

class CityTableSeeder extends Seeder
{
    public function run()
    {
        $cities = [
            ['title_ru' => 'Пермь', 'title_en' => 'perm', 'alias' => 'perm'],
            ['title_ru' => 'Москва', 'title_en' => 'moscow', 'alias' => 'moscow'],
            ['title_ru' => 'Магнитогорск', 'title_en' => 'magnitogorsk', 'alias' => 'magnitogorsk' ],
            ['title_ru' => 'Ростов-на-Дону', 'title_en' => 'rostov-on-don', 'alias' => 'rostov-na-donu' ],
            ['title_ru' => 'Екатеринбург', 'title_en' => 'ekaterinburg', 'alias' => 'yekaterinburg'],
            ['title_ru' => 'Волгоград', 'title_en' => 'volgograd', 'alias' => 'volgograd' ],
        ];

        DB::table('city')->insert($cities);
    }
}
