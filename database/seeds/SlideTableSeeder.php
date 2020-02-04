<?php


use Illuminate\Database\Seeder;

class SlideTableSeeder extends Seeder
{
    public function run()
    {
        $slides = [
            [
                'model_id' => 1,
                'type_id' => 1,
                'class' => 'slide_1',
                'title' => 'LADA Granta седан',
                'reduction' => 'Granta седан',
                'subtitle' => 'динамический дизайн<br> и вместительность',
                'link' => '/model_details'
            ],
            [
                'model_id' => 1,
                'type_id' => 2,
                'class' => 'slide_2',
                'title' => 'LADA Granta лифтбек',
                'reduction' => 'Granta лифтбек',
                'subtitle' => 'динамический дизайн<br> и вместительность',
                'link' => '/model_details'
            ],
            [
                'model_id' => 1,
                'type_id' => 3,
                'class' => 'slide_3',
                'title' => 'LADA Granta универсал',
                'reduction' => 'Granta универсал',
                'subtitle' => 'динамический дизайн<br> и вместительность',
                'link' => '/model_details'
            ],
            [
                'model_id' => 1,
                'type_id' => 4,
                'class' => 'slide_4',
                'title' => 'LADA Granta Cross',
                'reduction' => 'Granta Cross',
                'subtitle' => 'динамический дизайн<br> и вместительность',
                'link' => '/model_details'
            ],
            [
                'model_id' => 1,
                'type_id' => 5,
                'class' => 'slide_5',
                'title' => 'LADA Granta Drive Active',
                'reduction' => 'Granta drive active',
                'subtitle' => 'динамический дизайн<br> и вместительность',
                'link' => '/model_details'
            ],
            [
                'model_id' => 1,
                'type_id' => 6,
                'class' => 'slide_6',
                'title' => 'LADA Granta хэтчбек',
                'reduction' => 'Granta хэтчбек',
                'subtitle' => 'динамический дизайн<br> и вместительность',
                'link' => '/model_details',
            ]
        ];

        DB::table('slides')->insert($slides);
    }
}
