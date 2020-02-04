<?php


use Illuminate\Database\Seeder;

class SlideTableSeeder extends Seeder
{
    public function run()
    {
        $slides = [
            [
                'class' => 'slide_1',
                'title' => 'LADA Granta седан',
                'reduction' => 'Granta седан',
                'subtitle' => 'динамический дизайн<br> и вместительность',
                'link' => '/model_details'
            ],
            [
                'class' => 'slide_2',
                'title' => 'LADA Granta лифтбек',
                'reduction' => 'Granta лифтбек',
                'subtitle' => 'динамический дизайн<br> и вместительность',
                'link' => '/model_details'
            ],
            [
                'class' => 'slide_3',
                'title' => 'LADA Granta универсал',
                'reduction' => 'Granta универсал',
                'subtitle' => 'динамический дизайн<br> и вместительность',
                'link' => '/model_details'
            ],
            [
                'class' => 'slide_4',
                'title' => 'LADA Granta Cross',
                'reduction' => 'Granta Cross',
                'subtitle' => 'динамический дизайн<br> и вместительность',
                'link' => '/model_details'
            ],
            [
                'class' => 'slide_5',
                'title' => 'LADA Granta Drive Active',
                'reduction' => 'Granta drive active',
                'subtitle' => 'динамический дизайн<br> и вместительность',
                'link' => '/model_details'
            ],
            [
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
