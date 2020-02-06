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
            [
                'model_id' => 3,
                'type_id' => 20,
                'image' => '/build/images/slider/mini/xray/mobile/xray.png',
                'alt' => 'X-Ray',
                'title' => 'X-Ray'
            ],
            [
                'model_id' => 3,
                'type_id' => 5,
                'image' => '/build/images/slider/mini/xray/mobile/xray_cross.png',
                'alt' => 'Лада X-Ray Cross',
                'title' => 'X-Ray Cross'
            ],
            [
                'model_id' => 4,
                'type_id' => 11,
                'image' => '/build/images/slider/mini/4x4/mobile/4x4_three-doors.png',
                'alt' => 'Лада 4x4 3 дв.',
                'title' => '4x4 3 дв.'
            ],
            [
                'model_id' => 4,
                'type_id' => 12,
                'image' => '/build/images/slider/mini/4x4/mobile/4x4_three-doors-urban.png',
                'alt' => 'Лада 4x4 Urban 3 дв.',
                'title' => '4x4 Urban 3 дв.'
            ],
            [
                'model_id' => 4,
                'type_id' => 13,
                'image' => '/build/images/slider/mini/4x4/mobile/4x4_five-doors.png',
                'alt' => 'Лада 4x4 5 дв.',
                'title' => '4x4 5 дв.'
            ],
            [
                'model_id' => 4,
                'type_id' => 14,
                'image' => '/build/images/slider/mini/4x4/mobile/4x4_five-doors-urban.png',
                'alt' => 'Лада 4x4 Urban 5 дв.',
                'title' => '4x4 Urban 5 дв.'
            ],
            [
                'model_id' => 4,
                'type_id' => 15,
                'image' => '/build/images/slider/mini/4x4/mobile/4x4_bronto.png',
                'alt' => 'Лада 4x4 Bronto',
                'title' => '4x4 Bronto'
            ],
        ];

        DB::table('slide_mini')->insert($slides_mini);
    }
}
