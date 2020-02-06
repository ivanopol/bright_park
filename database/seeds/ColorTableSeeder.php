<?php


use Illuminate\Database\Seeder;

class ColorTableSeeder extends Seeder
{
    public function run()
    {
        $colors = [
            [
                'type_id' => 1,
                'model_id' => 1,
                'title' => 'Голубая планета',
                'image' => '/build/images/colors/lada/granta/lada_granta_blue_planet.png',
                'class' => 'color-blue-planet',
                'is_active' => true
            ],
            [
                'type_id' => 1,
                'model_id' => 1,
                'title' => 'Сердолик',
                'image' => '/build/images/colors/lada/granta/lada_granta_cornelian.png',
                'class' => 'color-cornelian',
                'is_active' => false
            ],
            [
                'type_id' => 1,
                'model_id' => 1,
                'title' => 'Белое облако',
                'image' => '/build/images/colors/lada/granta/lada_granta_white_cloud.png',
                'class' => 'color-white-cloud',
                'is_active' => false
            ],
            [
                'type_id' => 1,
                'model_id' => 1,
                'title' => 'Пантера',
                'image' => '/build/images/colors/lada/granta/lada_granta_panther.png',
                'class' => 'color-panther',
                'is_active' => false
            ],
            [
                'type_id' => 1,
                'model_id' => 1,
                'title' => 'Рислинг',
                'image' => '/build/images/colors/lada/granta/lada_granta_riesling.png',
                'class' => 'color-riesling',
                'is_active' => false
            ],
            [
                'type_id' => 1,
                'model_id' => 1,
                'title' => 'Техно',
                'image' => '/build/images/colors/lada/granta/lada_granta_techno.png',
                'class' => 'color-techno',
                'is_active' => false
            ],
            [
                'type_id' => 1,
                'model_id' => 1,
                'title' => 'Борнео',
                'image' => '/build/images/colors/lada/granta/lada_granta_borneo.png',
                'class' => 'color-borneo',
                'is_active' => false
            ],
            [
                'type_id' => 1,
                'model_id' => 1,
                'title' => 'Кориандр',
                'image' => '/build/images/colors/lada/granta/lada_granta_coriander.png',
                'class' => 'color-coriander',
                'is_active' => false
            ],
            [
                'type_id' => 1,
                'model_id' => 2,
                'title' => 'Ледниковый',
                'image' => '/build/images/colors/lada/vesta/lada_vesta_sedan_white.png',
                'class' => 'color-white-glacial',
                'is_active' => true
            ],
            [
                'type_id' => 1,
                'model_id' => 2,
                'title' => 'Сердолик',
                'image' => '/build/images/colors/lada/vesta/lada_vesta_sedan_red.png',
                'class' => 'color-red-cornelian',
                'is_active' => false
            ],
            [
                'type_id' => 1,
                'model_id' => 2,
                'title' => 'Ангкор',
                'image' => '/build/images/colors/lada/vesta/lada_vesta_sedan_brawn.png',
                'class' => 'color-angkor',
                'is_active' => false
            ],
            [
                'type_id' => 1,
                'model_id' => 2,
                'title' => 'Карфаген',
                'image' => '/build/images/colors/lada/vesta/lada_vesta_sedan_carfagen.png',
                'class' => 'color-carfagen',
                'is_active' => false
            ],
            [
                'type_id' => 1,
                'model_id' => 2,
                'title' => 'Дайвинг',
                'image' => '/build/images/colors/lada/vesta/lada_vesta_sedan_daiving.png',
                'class' => 'color-daiving',
                'is_active' => false
            ],
            [
                'type_id' => 1,
                'model_id' => 2,
                'title' => 'Фантом',
                'image' => '/build/images/colors/lada/vesta/lada_vesta_sedan_phantom.png',
                'class' => 'color-phantom',
                'is_active' => false
            ],
            [
                'type_id' => 1,
                'model_id' => 2,
                'title' => 'Плутон',
                'image' => '/build/images/colors/lada/vesta/lada_vesta_sedan_pluton.png',
                'class' => 'color-pluton',
                'is_active' => false
            ],
            [
                'type_id' => 1,
                'model_id' => 2,
                'title' => 'Маэстро',
                'image' => '/build/images/colors/lada/vesta/lada_vesta_sedan_maestro.png',
                'class' => 'color-maestro',
                'is_active' => false
            ],
            [
                'type_id' => 1,
                'model_id' => 2,
                'title' => 'Платина',
                'image' => '/build/images/colors/lada/vesta/lada_vesta_sedan_platina.png',
                'class' => 'color-platina',
                'is_active' => false
            ],
        ];

        DB::table('colors')->insert($colors);
    }
}
