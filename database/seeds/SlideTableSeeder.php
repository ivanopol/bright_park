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
                'class' => 'granta_1',
                'title' => 'LADA Granta седан',
                'reduction' => 'Granta седан',
                'subtitle' => 'динамический дизайн<br> и вместительность',
                'link' => '/model_details'
            ],
            [
                'model_id' => 1,
                'type_id' => 2,
                'class' => 'granta_2',
                'title' => 'LADA Granta лифтбек',
                'reduction' => 'Granta лифтбек',
                'subtitle' => 'динамический дизайн<br> и вместительность',
                'link' => '/model_details'
            ],
            [
                'model_id' => 1,
                'type_id' => 3,
                'class' => 'granta_3',
                'title' => 'LADA Granta универсал',
                'reduction' => 'Granta универсал',
                'subtitle' => 'динамический дизайн<br> и вместительность',
                'link' => '/model_details'
            ],
            [
                'model_id' => 1,
                'type_id' => 4,
                'class' => 'granta_cross',
                'title' => 'LADA Granta Cross',
                'reduction' => 'Granta Cross',
                'subtitle' => 'динамический дизайн<br> и вместительность',
                'link' => '/model_details'
            ],
            [
                'model_id' => 1,
                'type_id' => 5,
                'class' => 'granta_drive_active',
                'title' => 'LADA Granta Drive Active',
                'reduction' => 'Granta drive active',
                'subtitle' => 'динамический дизайн<br> и вместительность',
                'link' => '/model_details'
            ],
            [
                'model_id' => 1,
                'type_id' => 6,
                'class' => 'granta_6',
                'title' => 'LADA Granta хэтчбек',
                'reduction' => 'Granta хэтчбек',
                'subtitle' => 'динамический дизайн<br> и вместительность',
                'link' => '/model_details',
            ],
            [
                'model_id' => 2,
                'type_id' => 1,
                'class' => 'vesta_1',
                'title' => 'LADA Vesta седан',
                'reduction' => 'Vesta седан',
                'subtitle' => 'Классический стиль,</br> оптимальный выбор',
                'link' => '/model_details'
            ],
            [
                'model_id' => 3,
                'type_id' => 20,
                'class' => 'xray_1',
                'title' => 'LADA XRAY',
                'reduction' => 'XRAY',
                'subtitle' => 'Классический стиль,</br> оптимальный выбор',
                'link' => '/model_details'
            ],
            [
                'model_id' => 4,
                'type_id' => 11,
                'class' => 'l4x4_1',
                'title' => 'LADA 4x4',
                'reduction' => '4x4',
                'subtitle' => 'Классический стиль,</br> оптимальный выбор',
                'link' => '/model_details'
            ],
            [
                'model_id' => 5,
                'type_id' => 3,
                'class' => 'largus_1',
                'title' => 'LADA Largus универсал',
                'reduction' => 'Largus универсал',
                'subtitle' => 'Классический стиль,</br> оптимальный выбор',
                'link' => '/model_details'
            ],
            [
                'model_id' => 3,
                'type_id' => 4,
                'class' => 'xray_1',
                'title' => 'LADA X-Ray',
                'reduction' => 'X-Ray',
                'subtitle' => 'Классический стиль,</br> оптимальный выбор',
                'link' => '/model_details'
            ],
            [
                'model_id' => 5,
                'type_id' => 4,
                'class' => 'largus_1',
                'title' => 'LADA Largus Cross',
                'reduction' => 'Largus Cross',
                'subtitle' => 'динамический дизайн<br> и вместительность',
                'link' => '/model_details'
            ],
            [
                'model_id' => 2,
                'type_id' => 7,
                'class' => 'vesta_1',
                'title' => 'LADA Vesta SW',
                'reduction' => 'SW',
                'subtitle' => 'динамический дизайн<br> и вместительность',
                'link' => '/model_details'
            ],
            [
                'model_id' => 2,
                'type_id' => 8,
                'class' => 'vesta_2',
                'title' => 'LADA Vesta SW Cross',
                'reduction' => 'SW Cross',
                'subtitle' => 'динамический дизайн<br> и вместительность',
                'link' => '/model_details'
            ],
            [
                'model_id' => 2,
                'type_id' => 10,
                'class' => 'vesta_3',
                'title' => 'LADA Vesta Sport',
                'reduction' => 'Sport',
                'subtitle' => 'динамический дизайн<br> и вместительность',
                'link' => '/model_details'
            ],
        ];

        DB::table('slides')->insert($slides);
    }
}
