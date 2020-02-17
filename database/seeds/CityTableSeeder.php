<?php

use Illuminate\Database\Seeder;

class CityTableSeeder extends Seeder
{
    public function run()
    {
        $cities = [
            ['title_ru' => 'Пермь', 'title_en' => 'perm', 'alias' => 'perm', 'coordinates'=>'57.997388, 56.306636'],
            ['title_ru' => 'Москва', 'title_en' => 'moscow', 'alias' => 'moscow', 'coordinates'=>'55.488305, 37.565856'],
            ['title_ru' => 'Магнитогорск', 'title_en' => 'magnitogorsk', 'alias' => 'magnitogorsk', 'coordinates'=>'53.342167, 58.996030'],
            ['title_ru' => 'Ростов-на-Дону', 'title_en' => 'rostov-on-don', 'alias' => 'rostov-na-donu', 'coordinates'=>'47.220273, 39.686051'],
            ['title_ru' => 'Екатеринбург', 'title_en' => 'ekaterinburg', 'alias' => 'yekaterinburg', 'coordinates'=>'53.342167, 58.996030'],
            ['title_ru' => 'Волгоград', 'title_en' => 'volgograd', 'alias' => 'volgograd', 'coordinates'=>'48.644535, 44.429039'],
        ];

        DB::table('cities')->insert($cities);
    }
}
