<?php


use Illuminate\Database\Seeder;

class ColorTableSeeder extends Seeder
{
    public function run()
    {
        $colors = [
            [
                'title' => 'Голубая планета',
                'image' => '/build/images/colors/lada/granta/lada_granta_blue_planet.png',
                'class' => 'color-blue-planet',
                'is_active' => true
            ],
            [
                'title' => 'Сердолик',
                'image' => '/build/images/colors/lada/granta/lada_granta_cornelian.png',
                'class' => 'color-cornelian',
                'is_active' => false
            ],
            [
                'title' => 'Белое облако',
                'image' => '/build/images/colors/lada/granta/lada_granta_white_cloud.png',
                'class' => 'color-white-cloud',
                'is_active' => false
            ],
            [
                'title' => 'Пантера',
                'image' => '/build/images/colors/lada/granta/lada_granta_panther.png',
                'class' => 'color-panther',
                'is_active' => false
            ],
            [
                'title' => 'Рислинг',
                'image' => '/build/images/colors/lada/granta/lada_granta_riesling.png',
                'class' => 'color-riesling',
                'is_active' => false
            ],
            [
                'title' => 'Техно',
                'image' => '/build/images/colors/lada/granta/lada_granta_techno.png',
                'class' => 'color-techno',
                'is_active' => false
            ],
            [
                'title' => 'Борнео',
                'image' => '/build/images/colors/lada/granta/lada_granta_borneo.png',
                'class' => 'color-borneo',
                'is_active' => false
            ],
            [
                'title' => 'Кориандр',
                'image' => '/build/images/colors/lada/granta/lada_granta_coriander.png',
                'class' => 'color-coriander',
                'is_active' => false
            ],
        ];

        DB::table('colors')->insert($colors);
    }
}
