<?php


use Illuminate\Database\Seeder;

class SlideMiniTableSeeder extends Seeder
{
    public function run()
    {
        $slides_mini = [
            [
                'model_id' => 1,
                'type_id' => 1,
                'image' => '/build/images/slider/mini/granta/mobile/lada_granta_sedan.png',
                'alt' => 'Лада Гранта седан',
                'title' => 'Седан'
            ],
            [
                'model_id' => 1,
                'type_id' => 2,
                'image' => '/build/images/slider/mini/granta/mobile/lada_granta_liftback.png',
                'alt' =>  'Лада Гранта лифтбек',
                'title' => 'Лифтбек'
            ],
            [
                'model_id' => 1,
                'type_id' => 3,
                'image' => '/build/images/slider/mini/granta/mobile/lada_granta_universal.png',
                'alt' => 'Лада Гранта универсал',
                'title' => 'Универсал'
            ],
            [
                'model_id' => 1,
                'type_id' => 4,
                'image' => '/build/images/slider/mini/granta/mobile/lada_granta_cross.png',
                'alt'=> 'Лада Гранта cross',
                'title' => 'Cross'
            ],
            [
                'model_id' => 1,
                'type_id' => 5,
                'image' => '/build/images/slider/mini/granta/mobile/lada_granta_drive_active.png',
                'alt' => 'Лада Гранта Drive Active',
                'title' => 'Drive Active'
            ],
            [
                'model_id' => 1,
                'type_id' => 6,
                'image' => '/build/images/slider/mini/granta/mobile/lada_granta_hatcback.png',
                'alt' => 'Лада Гранта хэтчбек',
                'title' => 'Хэтчбек'
            ],
            [
                'model_id' => 2,
                'type_id' => 1,
                'image' => '/build/images/slider/mini/vesta/mobile/lada_vesta_sedan.png',
                'alt' => 'Лада Веста седан',
                'title' => 'Седан'
            ],
            [
                'model_id' => 2,
                'type_id' => 2,
                'image' => '/build/images/slider/mini/vesta/mobile/lada_vesta_cross.png',
                'alt' =>  'Лада Веста Cross',
                'title' => 'Cross'
            ],
            [
                'model_id' => 2,
                'type_id' => 3,
                'image' => '/build/images/slider/mini/vesta/mobile/lada_vesta_sw.png',
                'alt' => 'Лада Веста SW',
                'title' => 'SW'
            ],
            [
                'model_id' => 2,
                'type_id' => 4,
                'image' => '/build/images/slider/mini/vesta/mobile/lada_vesta_sw_cross.png',
                'alt'=> 'Лада Веста SW Cross',
                'title' => 'SW Cross'
            ],
            [
                'model_id' => 2,
                'type_id' => 5,
                'image' => '/build/images/slider/mini/vesta/mobile/lada_vesta_cng.png',
                'alt' => 'Лада Веста CNG',
                'title' => 'CNG'
            ],
            [
                'model_id' => 2,
                'type_id' => 6,
                'image' => '/build/images/slider/mini/vesta/mobile/lada_vesta_sport.png',
                'alt' => 'Лада Веста Sport',
                'title' => 'Sport'
            ],
        ];

        DB::table('slide_mini')->insert($slides_mini);
    }
}
