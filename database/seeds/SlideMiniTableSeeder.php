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
            ]
        ];

        DB::table('slide_mini')->insert($slides_mini);
    }
}
