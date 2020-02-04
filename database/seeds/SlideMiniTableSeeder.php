<?php


use Illuminate\Database\Seeder;

class SlideMiniTableSeeder extends Seeder
{
    public function run()
    {
        $slides_mini = [
            [
                'image' => '/build/images/slider/mini/granta/mobile/lada_granta_sedan.png',
                'alt' => 'Лада Гранта седан',
                'title' => 'Седан'
            ],
            [
                'image' => '/build/images/slider/mini/granta/mobile/lada_granta_liftback.png',
                'alt' =>  'Лада Гранта лифтбек',
                'title' => 'Лифтбек'
            ],
            [
                'image' => '/build/images/slider/mini/granta/mobile/lada_granta_universal.png',
                'alt' => 'Лада Гранта универсал',
                'title' => 'Универсал'
            ],
            [
                'image' => '/build/images/slider/mini/granta/mobile/lada_granta_cross.png',
                'alt'=> 'Лада Гранта cross',
                'title' => 'Cross'
            ],
            [
                'image' => '/build/images/slider/mini/granta/mobile/lada_granta_drive_active.png',
                'alt' => 'Лада Гранта Drive Active',
                'title' => 'Drive Active'
            ],
            [
                'image' => '/build/images/slider/mini/granta/mobile/lada_granta_hatcback.png',
                'alt' => 'Лада Гранта хэтчбек',
                'title' => 'Хэтчбек'
            ]
        ];

        DB::table('slide_mini')->insert($slides_mini);
    }
}
