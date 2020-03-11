<?php


use Illuminate\Database\Seeder;
use Carbon\Carbon;

class SpecialOffersTableSeeder extends Seeder
{
    public function run()
    {
        $special_offers = [
            [
                'date' => null,
                'title'=>'LADA VESTA',
                'description'=>'Доплата<br> 40 000 рублей<br> при обмене на <span class="highlight">LADA Granta</span>',
                'count'=>17,
                'is_active'=>true,
                'img_mobile' => '/build/images/main/mobile/main_granta_red.jpg',
                'img_tablet' => '/build/images/main/tablet/main_granta_red.jpg',
                'img_desktop' => '/build/images/main/desktop/main_granta_red.jpg',
            ],

            [
                'date' => Carbon::create(2020, 03, 30, 0, 0, 0),
                'title'=>'LADA VESTA',
                'description'=>'LADA Vesta<br> выгода 10%<br> по госпрограмме',
                'count'=>6,
                'is_active'=>true,
                'img_mobile' => '/build/images/main/mobile/main_vesta_gray.jpg',
                'img_tablet' => '/build/images/main/tablet/main_vesta_gray.jpg',
                'img_desktop' => '/build/images/main/desktop/main_vesta_gray.jpg',
            ],
        ];

        DB::table('special_offers')->insert($special_offers);
    }
}
