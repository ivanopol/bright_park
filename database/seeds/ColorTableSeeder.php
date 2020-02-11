<?php


use Illuminate\Database\Seeder;

class ColorTableSeeder extends Seeder
{
    public function run()
    {
        $colors = [
            // Granta
            // sedan
            [
                'type_id' => 1,
                'model_id' => 1,
                'title' => 'Голубая планета',
                'image' => '/build/images/colors/lada/granta/sedan/lada_granta_blue_planet.png',
                'class' => 'color-blue-planet',
                'is_active' => true
            ],
            [
                'type_id' => 1,
                'model_id' => 1,
                'title' => 'Сердолик',
                'image' => '/build/images/colors/lada/granta/sedan/lada_granta_cornelian.png',
                'class' => 'color-cornelian',
                'is_active' => false
            ],
            [
                'type_id' => 1,
                'model_id' => 1,
                'title' => 'Белое облако',
                'image' => '/build/images/colors/lada/granta/sedan/lada_granta_white_cloud.png',
                'class' => 'color-white-cloud',
                'is_active' => false
            ],
            [
                'type_id' => 1,
                'model_id' => 1,
                'title' => 'Пантера',
                'image' => '/build/images/colors/lada/granta/sedan/lada_granta_panther.png',
                'class' => 'color-panther',
                'is_active' => false
            ],
            [
                'type_id' => 1,
                'model_id' => 1,
                'title' => 'Рислинг',
                'image' => '/build/images/colors/lada/granta/sedan/lada_granta_riesling.png',
                'class' => 'color-riesling',
                'is_active' => false
            ],
            [
                'type_id' => 1,
                'model_id' => 1,
                'title' => 'Техно',
                'image' => '/build/images/colors/lada/granta/sedan/lada_granta_techno.png',
                'class' => 'color-techno',
                'is_active' => false
            ],
            [
                'type_id' => 1,
                'model_id' => 1,
                'title' => 'Борнео',
                'image' => '/build/images/colors/lada/granta/sedan/lada_granta_borneo.png',
                'class' => 'color-borneo',
                'is_active' => false
            ],
            [
                'type_id' => 1,
                'model_id' => 1,
                'title' => 'Кориандр',
                'image' => '/build/images/colors/lada/granta/sedan/lada_granta_coriander.png',
                'class' => 'color-coriander',
                'is_active' => false
            ],
            // liftback
            [
                'type_id' => 2,
                'model_id' => 1,
                'title' => 'Голубая планета',
                'image' => '/build/images/colors/lada/granta/liftback/lada_granta_blue_planet.png',
                'class' => 'color-blue-planet',
                'is_active' => true
            ],
            [
                'type_id' => 2,
                'model_id' => 1,
                'title' => 'Сердолик',
                'image' => '/build/images/colors/lada/granta/liftback/lada_granta_cornelian.png',
                'class' => 'color-cornelian',
                'is_active' => false
            ],
            [
                'type_id' => 2,
                'model_id' => 1,
                'title' => 'Белое облако',
                'image' => '/build/images/colors/lada/granta/liftback/lada_granta_white_cloud.png',
                'class' => 'color-white-cloud',
                'is_active' => false
            ],
            [
                'type_id' => 2,
                'model_id' => 1,
                'title' => 'Пантера',
                'image' => '/build/images/colors/lada/granta/liftback/lada_granta_panther.png',
                'class' => 'color-panther',
                'is_active' => false
            ],
            [
                'type_id' => 2,
                'model_id' => 1,
                'title' => 'Рислинг',
                'image' => '/build/images/colors/lada/granta/liftback/lada_granta_riesling.png',
                'class' => 'color-riesling',
                'is_active' => false
            ],
            [
                'type_id' => 2,
                'model_id' => 1,
                'title' => 'Техно',
                'image' => '/build/images/colors/lada/granta/liftback/lada_granta_techno.png',
                'class' => 'color-techno',
                'is_active' => false
            ],
            [
                'type_id' => 2,
                'model_id' => 1,
                'title' => 'Борнео',
                'image' => '/build/images/colors/lada/granta/liftback/lada_granta_borneo.png',
                'class' => 'color-borneo',
                'is_active' => false
            ],
            [
                'type_id' => 2,
                'model_id' => 1,
                'title' => 'Кориандр',
                'image' => '/build/images/colors/lada/granta/liftback/lada_granta_coriander.png',
                'class' => 'color-coriander',
                'is_active' => false
            ],
            // Vesta
            // sedan
            [
                'type_id' => 1,
                'model_id' => 2,
                'title' => 'Ледниковый',
                'image' => '/build/images/colors/lada/vesta/sedan/lada_vesta_sedan_white.png',
                'class' => 'color-white-glacial',
                'is_active' => true
            ],
            [
                'type_id' => 1,
                'model_id' => 2,
                'title' => 'Сердолик',
                'image' => '/build/images/colors/lada/vesta/sedan/lada_vesta_sedan_red.png',
                'class' => 'color-red-cornelian',
                'is_active' => false
            ],
            [
                'type_id' => 1,
                'model_id' => 2,
                'title' => 'Ангкор',
                'image' => '/build/images/colors/lada/vesta/sedan/lada_vesta_sedan_brawn.png',
                'class' => 'color-angkor',
                'is_active' => false
            ],
            [
                'type_id' => 1,
                'model_id' => 2,
                'title' => 'Карфаген',
                'image' => '/build/images/colors/lada/vesta/sedan/lada_vesta_sedan_carfagen.png',
                'class' => 'color-carfagen',
                'is_active' => false
            ],
            [
                'type_id' => 1,
                'model_id' => 2,
                'title' => 'Дайвинг',
                'image' => '/build/images/colors/lada/vesta/sedan/lada_vesta_sedan_daiving.png',
                'class' => 'color-daiving',
                'is_active' => false
            ],
            [
                'type_id' => 1,
                'model_id' => 2,
                'title' => 'Фантом',
                'image' => '/build/images/colors/lada/vesta/sedan/lada_vesta_sedan_phantom.png',
                'class' => 'color-phantom',
                'is_active' => false
            ],
            [
                'type_id' => 1,
                'model_id' => 2,
                'title' => 'Плутон',
                'image' => '/build/images/colors/lada/vesta/sedan/lada_vesta_sedan_pluton.png',
                'class' => 'color-pluton',
                'is_active' => false
            ],
            [
                'type_id' => 1,
                'model_id' => 2,
                'title' => 'Маэстро',
                'image' => '/build/images/colors/lada/vesta/sedan/lada_vesta_sedan_maestro.png',
                'class' => 'color-maestro',
                'is_active' => false
            ],
            [
                'type_id' => 1,
                'model_id' => 2,
                'title' => 'Платина',
                'image' => '/build/images/colors/lada/vesta/sedan/lada_vesta_sedan_platina.png',
                'class' => 'color-platina',
                'is_active' => false
            ],
            // XRay
            // xray
            [
                'type_id' => 20,
                'model_id' => 3,
                'title' => 'Ледниковый',
                'image' => '/build/images/colors/lada/xray/xray/lada_xray_glacial.png',
                'class' => 'color-white-glacial',
                'is_active' => true
            ],
            [
                'type_id' => 20,
                'model_id' => 3,
                'title' => 'Огненно-красный',
                'image' => '/build/images/colors/lada/xray/xray/lada_xray_fiery_red.png',
                'class' => 'color-fiery-red',
                'is_active' => false
            ],
            [
                'type_id' => 20,
                'model_id' => 3,
                'title' => 'Серый базальт',
                'image' => '/build/images/colors/lada/xray/xray/lada_xray_basalt_gray.png',
                'class' => 'color-basalt-gray',
                'is_active' => false
            ],
            [
                'type_id' => 20,
                'model_id' => 3,
                'title' => 'Пума',
                'image' => '/build/images/colors/lada/xray/xray/lada_xray_light_brown_cougar.png',
                'class' => 'color-light-brown-cougar',
                'is_active' => false
            ],
            [
                'type_id' => 20,
                'model_id' => 3,
                'title' => 'Черная жемчужина',
                'image' => '/build/images/colors/lada/xray/xray/lada_xray_black_pearl.png',
                'class' => 'color-black-pearl',
                'is_active' => false
            ],
            [
                'type_id' => 20,
                'model_id' => 3,
                'title' => 'Платина',
                'image' => '/build/images/colors/lada/xray/xray/lada_xray_platina.png',
                'class' => 'color-platina',
                'is_active' => false
            ],
            // 4x4
            // 3 doors
            [
                'type_id' => 11,
                'model_id' => 4,
                'title' => 'Белое облако',
                'image' => '/build/images/colors/lada/4x4/three_doors/4x4_white_cloud.png',
                'class' => 'color-white-cloud',
                'is_active' => true
            ],
            [
                'type_id' => 11,
                'model_id' => 4,
                'title' => 'Несси 2',
                'image' => '/build/images/colors/lada/4x4/three_doors/4x4_nessi_2.png',
                'class' => 'color-nessi-2',
                'is_active' => false
            ],
            [
                'type_id' => 11,
                'model_id' => 4,
                'title' => 'Пантера',
                'image' => '/build/images/colors/lada/4x4/three_doors/4x4_panthera.png',
                'class' => 'color-panthera',
                'is_active' => false
            ],
            [
                'type_id' => 11,
                'model_id' => 4,
                'title' => 'Бенефис',
                'image' => '/build/images/colors/lada/4x4/three_doors/4x4_benefis.png',
                'class' => 'color-benefis',
                'is_active' => false
            ],
            [
                'type_id' => 11,
                'model_id' => 4,
                'title' => 'Барокко',
                'image' => '/build/images/colors/lada/4x4/three_doors/4x4_barokko.png',
                'class' => 'color-barokko',
                'is_active' => false
            ],
            [
                'type_id' => 11,
                'model_id' => 4,
                'title' => 'Голубая планета',
                'image' => '/build/images/colors/lada/4x4/three_doors/4x4_blue_planet.png',
                'class' => 'color-blue-planet',
                'is_active' => false
            ],
            [
                'type_id' => 11,
                'model_id' => 4,
                'title' => 'Терра',
                'image' => '/build/images/colors/lada/4x4/three_doors/4x4_terra.png',
                'class' => 'color-terra',
                'is_active' => false
            ],
            [
                'type_id' => 11,
                'model_id' => 4,
                'title' => 'Борнео',
                'image' => '/build/images/colors/lada/4x4/three_doors/4x4_borneo.png',
                'class' => 'color-borneo-dark',
                'is_active' => false
            ],
            [
                'type_id' => 11,
                'model_id' => 4,
                'title' => 'Снежная королева',
                'image' => '/build/images/colors/lada/4x4/three_doors/4x4_snow_queen.png',
                'class' => 'color-snow-queen',
                'is_active' => false
            ],
            [
                'type_id' => 11,
                'model_id' => 4,
                'title' => 'Кориандр',
                'image' => '/build/images/colors/lada/4x4/three_doors/4x4_coriander.png',
                'class' => 'color-coriander-dark',
                'is_active' => false
            ],
            [
                'type_id' => 11,
                'model_id' => 4,
                'title' => 'Камуфляж джунгли',
                'image' => '/build/images/colors/lada/4x4/three_doors/4x4_camouflage_jungle.png',
                'class' => 'color-camouflage-jungle',
                'is_active' => false
            ],
        ];

        DB::table('colors')->insert($colors);
    }
}
