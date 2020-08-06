<?php

use Illuminate\Database\Seeder;

class SeoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $seo = [
            [
                'url' => 'granta',
                'title' => 'Лада Гранта: цена, купить в автосалонах <:CITY_DATIVE:> новую Lada Granta 2020',
                'description' => 'Официальный дилер LADA Брайт Парк ⭐ предлагает лучшие цены 👍🏼 на покупку и сервисное обслуживание 🛠 Лада Гранта в <:REGION_DATIVE:> 🚗 Купить новую Granta в <:CITY_DATIVE:> 🚗 в обмен и кредит. 500 авто с ПТС в наличии',
            ],
            [
                'url' => 'granta/cross',
                'title' => 'Лада Гранта Кросс: цена и комплектация в автосалонах <:CITY_DATIVE:> ー купить новую Lada Granta Cross',
                'description' => 'Официальный дилер LADA Брайт Парк ⭐ предлагает лучшие цены 👍🏼 на покупку и сервисное обслуживание 🛠 Лада Гранта Кросс в <:REGION_DATIVE:> 🚗 Купить новую Granta Cross в <:CITY_DATIVE:> 🚗 в обмен и кредит. 500 авто с ПТС в наличии',
            ],
            [
                'url' => 'granta/sedan',
                'title' => 'Лада Гранта Седан: цена, купить в автосалонах <:CITY_DATIVE:> новую Lada Granta Седан 2020',
                'description' => 'Официальный дилер LADA Брайт Парк ⭐ предлагает лучшие цены 👍🏼 на покупку и сервисное обслуживание 🛠 Лада Гранта Седан в <:REGION_DATIVE:> 🚗 Купить новую Granta Седан в <:CITY_DATIVE:> 🚗 в обмен и кредит. 500 авто с ПТС в наличии',
            ],
            [
                'url' => 'granta/drive-active',
                'title' => 'Лада Гранта Драйв Актив: цена, купить в автосалонах <:CITY_DATIVE:> новую Lada Granta Drive Active 2020',
                'description' => 'Официальный дилер LADA Брайт Парк ⭐ предлагает лучшие цены 👍🏼 на покупку и сервисное обслуживание 🛠 Лада Гранта Драйв Актив в <:REGION_DATIVE:> 🚗 Купить новую Granta Drive Active в <:CITY_DATIVE:> 🚗 в обмен и кредит. 500 авто с ПТС в наличии',
            ],
            [
                'url' => 'granta/liftback',
                'title' => 'Лада Гранта Лифтбек: цена, купить в новую Lada Granta <:CITY_DATIVE:> в Перми 2020',
                'description' => 'Официальный дилер LADA Брайт Парк ⭐ предлагает лучшие цены 👍🏼 на покупку и сервисное обслуживание 🛠 Лада Гранта Лифтбек в <:REGION_DATIVE:> 🚗 Купить новую Granta Лифтбек в <:CITY_DATIVE:> 🚗 в обмен и кредит. 500 авто с ПТС в наличии',
            ],
            [
                'url' => 'vesta',
                'title' => 'Лада Веста: цена, купить новую Lada Vesta у официального дилера в <:CITY_DATIVE:>',
                'description' => 'Официальный дилер LADA Брайт Парк ⭐ предлагает лучшие цены 👍🏼 на покупку и сервисное обслуживание 🛠 Лада Веста в <:REGION_DATIVE:> 🚗 Купить новую Vesta в <:CITY_DATIVE:> 🚗 в обмен и кредит. 500 авто с ПТС в наличии',
            ],
            [
                'url' => 'vesta/sedan',
                'title' => 'Лада Веста Седан: цена, купить у официального дилера в <:CITY_DATIVE:> новую Lada Vesta Седан 2020',
                'description' => 'Официальный дилер LADA Брайт Парк ⭐ предлагает лучшие цены 👍🏼 на покупку и сервисное обслуживание 🛠 Лада Седан в <:REGION_DATIVE:> 🚗 Купить новую Седан в <:CITY_DATIVE:> 🚗 в обмен и кредит. 500 авто с ПТС в наличии',
            ],
            [
                'url' => 'vesta/sw-cross',
                'title' => 'Лада Веста СВ Кросс: цена, купить у официального дилера в <:CITY_DATIVE:> новую Lada Vesta SW Cross 2020',
                'description' => 'Официальный дилер LADA Брайт Парк ⭐ предлагает лучшие цены 👍🏼 на покупку и сервисное обслуживание 🛠 Лада Веста СВ Кросс в <:REGION_DATIVE:> 🚗 Купить новую Vesta SW Cross в <:CITY_DATIVE:> 🚗 в обмен и кредит. 500 авто с ПТС в наличии',
            ],
            [
                'url' => 'vesta/cng',
                'title' => 'Лада Веста СНГ: купить, цена у официального дилера в <:CITY_DATIVE:> новой Lada Vesta CNG 2020',
                'description' => 'Официальный дилер LADA Брайт Парк ⭐ предлагает лучшие цены 👍🏼 на покупку и сервисное обслуживание 🛠 Лада Веста в <:REGION_DATIVE:> 🚗 Купить новую Vesta в <:CITY_DATIVE:> 🚗 в обмен и кредит. 500 авто с ПТС в наличии',
            ],
            [
                'url' => 'vesta/sw',
                'title' => 'Лада Веста СВ: цена, купить у официального дилера в <:CITY_DATIVE:> новую Lada Vesta SW 2020',
                'description' => 'Официальный дилер LADA Брайт Парк ⭐ предлагает лучшие цены 👍🏼 на покупку и сервисное обслуживание 🛠 Лада Веста СВ в <:REGION_DATIVE:> 🚗 Купить новую Vesta SW в <:CITY_DATIVE:> 🚗 в обмен и кредит. 500 авто с ПТС в наличии',
            ],
            [
                'url' => 'xray/xray',
                'title' => 'Лада Х Рей: цена, купить в автосалонах <:CITY_DATIVE:> новую Lada Xray 2020',
                'description' => 'Официальный дилер LADA Брайт Парк ⭐ предлагает лучшие цены 👍🏼 на покупку и сервисное обслуживание 🛠 Лада Х Рей в <:REGION_DATIVE:> 🚗 Купить новую Lada X-Ray в <:CITY_DATIVE:> 🚗 в обмен и кредит. 500 авто с ПТС в наличии',
            ],
            [
                'url' => 'xray/cross',
                'title' => 'Лада Х Рей Кросс: цена, купить в автосалонах <:CITY_DATIVE:> новую Lada Xray Сross 2020',
                'description' => 'Официальный дилер LADA Брайт Парк ⭐ предлагает лучшие цены 👍🏼 на покупку и сервисное обслуживание 🛠 Лада Х Рей Кросс в <:REGION_DATIVE:> 🚗 Купить новую Lada X-Ray Cross в <:CITY_DATIVE:> 🚗 в обмен и кредит. 500 авто с ПТС в наличии',
            ],
            [
                'url' => 'largus/universal',
                'title' => 'Лада Ларгус: цена, купить новую Lada Largus в <:CITY_DATIVE:> у официального дилера',
                'description' => 'Официальный дилер LADA Брайт Парк ⭐ предлагает лучшие цены 👍🏼 на покупку и сервисное обслуживание 🛠 Лада Ларгус в <:REGION_DATIVE:> 🚗 Купить новую Lada Largus в <:CITY_DATIVE:> 🚗 в обмен и кредит. 500 авто с ПТС в наличии',
            ],
            [
                'url' => '4x4/three-doors',
                'title' => 'Лада 4х4: цена, купить в <:CITY_DATIVE:> у официального дилера новую Lada Нива 4х4',
                'description' => 'Официальный дилер LADA Брайт Парк ⭐ предлагает лучшие цены 👍🏼 на покупку и сервисное обслуживание 🛠 Лада 4х4 в <:REGION_DATIVE:> 🚗 Купить новую Lada 4х4 в <:CITY_DATIVE:> 🚗 в обмен и кредит. 500 авто с ПТС в наличии',
            ],
            [
                'url' => 'niva/niva',
                'title' => 'Купить Ниву в <:CITY_DATIVE:>: цена новой Лада (LADA) Niva у официального дилера',
                'description' => '✅Официальный дилер LADA Брайт Парк✅ предлагает лучшие цены 👍🏼 на покупку и сервисное обслуживание 🛠 Лада Нива в <:REGION_DATIVE:> ⭐Купить новую Lada Niva в <:CITY_DATIVE:>⭐',
            ],
        ];

        DB::table('seo')->insert($seo);
    }
}
