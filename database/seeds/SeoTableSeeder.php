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
            [
                'url' => 'stocks',
                'title' => 'Акции дилерского центра Брайт Парк (Bright Park) в <:CITY_DATIVE:>',
                'description' => '',
            ],
            [
                'url' => 'stocks/lada_vesta_vygoda_10_po_gosprogramme',
                'title' => 'LADA Vesta по обновленной госпрограмме | Акции Брайт Парк в <:CITY_DATIVE:>',
                'description' => '🔥Расширенные условия программы государственной поддержки в Брайт парке! Максимально выгодные предложения на покупку LADA. Подробнее на сайте Bright Park',
            ],
            [
                'url' => 'stocks/obmen_na_lada_vesta_vyshe_rynochnoj_ceny',
                'title' => 'Обмен на LADA Vesta выше рыночной цены | Акции Брайт Парк в <:CITY_DATIVE:>',
                'description' => '🔥Воспользуйтесь возможностью обменять свой автомобиль выше рыночной стоимости и с дополнительной выгодой - 40 000 рублей. Подробнее на сайте Bright Park',
            ],
            [
                'url' => 'stocks/lada_granta_0_pervonachalnyj_vznos',
                'title' => 'LADA Granta 0% первоначальный взнос | Акции Брайт Парк в <:CITY_DATIVE:>',
                'description' => '🔥Наш дилерский центр предлагает услугу автокредитования. Подробнее на сайте Bright Park',
            ],
            [
                'url' => 'stocks/brajt_park_rabotaet_onlajn',
                'title' => 'Брайт Парк работает онлайн! Полный цикл услуг по приобретению автомобиля | Акции Брайт Парк в <:CITY_DATIVE:>',
                'description' => '🔥Брайт Парк работает онлайн! Мы оказываем полный цикл услуг по приобретению автомобиля. Подробнее на сайте Bright Park',
            ],
            [
                'url' => 'stocks/doplata_40_000_rublej_pri_obmene_na_lada_granta',
                'title' => 'Доплата 40 000 рублей при обмене на LADA Granta | Акции Брайт Парк в <:CITY_DATIVE:>',
                'description' => '🔥Воспользуйтесь возможностью обменять свой автомобиль с дополнительной выгодой - 40 000 рублей. Подробнее на сайте Bright Park',
            ],
            [
                'url' => 'news/start-prodazh-lada-niva',
                'title' => 'Старт продаж LADA Niva  | Новости Брайт Парк в <:CITY_DATIVE:>',
                'description' => '🔥Начались продажи внедорожника Niva под маркой LADA. Подробнее на сайте Bright Park',
            ],
            [
                'url' => 'news/lada-itogi-prodazh-v-i-polugodii-2020-goda',
                'title' => 'LADA: итоги продаж в первом полугодии 2020 года | Новости Брайт Парк в <:CITY_DATIVE:>',
                'description' => '🔥LADA подводит итоги продаж в первой половине 2020 года и фиксирует начало поэтапного восстановления спроса на рынке. Подробнее на сайте Bright Park',
            ],
            [
                'url' => 'news/lada-bolee-1000-novyh-furgonov-dlya-pochty-rossii',
                'title' => 'LADA: более 1000 новых фургонов для Почты России | Новости Брайт Парк в <:CITY_DATIVE:>',
                'description' => '🔥LADA приступила к отгрузке крупной партии LADA Largus для Почты России. Подробнее на сайте Bright Park',
            ],
            [
                'url' => 'news/lada-vesta-vypushcheno-450-000-avtomobilej',
                'title' => 'LADA Vesta: выпущено 450 000 автомобилей | Новости Брайт Парк в <:CITY_DATIVE:>',
                'description' => '🔥C конвейера завода LADA Ижевск (входит в Группу АВТОВАЗ) сошел 450-тысячный автомобиль семейства LADA Vesta. Подробнее на сайте Bright Park',
            ],
            [
                'url' => 'news/lada-v-iyune-novye-vygodnye-predlozheniya',
                'title' => 'LADA в июне: новые выгодные предложения | Новости Брайт Парк в <:CITY_DATIVE:>',
                'description' => '🔥LADA объявляет об акциях в июне, позволяющих приобрести новый автомобиль на максимально выгодных условиях. Подробнее на сайте Bright Park',
            ],
            [
                'url' => 'news/new-benefits-when-buying-lada',
                'title' => 'Новые выгоды при покупке LADA | Новости Брайт Парк в <:CITY_DATIVE:>',
                'description' => '🔥Новые выгоды при покупке LADA. Подробнее на сайте Bright Park',
            ],
            [
                'url' => 'news/lada-vesta-sport-expands-the-color-range',
                'title' => 'LADA Vesta Sport расширяет цветовую гамму | Новости Брайт Парк в <:CITY_DATIVE:>',
                'description' => '🔥Спортивная модель семейства LADA Vesta получила два новых цвета. Подробнее на сайте Bright Park',
            ],
            [
                'url' => 'news/lada_sale_results',
                'title' => 'Результаты продаж автомобилей LADA в апреле | Новости Брайт Парк в <:CITY_DATIVE:>',
                'description' => '🔥LADA подвела итоги прошлого месяца. Подробнее на сайте Bright Park',
            ],
            [
                'url' => 'news/niva_modification_in_germany',
                'title' => 'В Германии появилась модификация LADA 4x4 | Новости Брайт Парк в <:CITY_DATIVE:>',
                'description' => '🔥Сеть немецких автосалонов предлагает несколько необычных модификаций LADA 4х4, оснащённых подвижным скребком. Подробнее на сайте Bright Park',
            ],
            [
                'url' => 'news/lada_kabriolet',
                'title' => 'Кабриолет LADA Natasha | Новости Брайт Парк в <:CITY_DATIVE:>',
                'description' => '🔥В 1990 году компания «Скалдия-Волга» из Бельгии, придумала Кабриолет на базе LADA Samara. Подробнее на сайте Bright Park',
            ],
            [
                'url' => 'news/lada_continue_modernisation',
                'title' => 'LADA продолжает модернизировать технологии | Новости Брайт Парк в <:CITY_DATIVE:>',
                'description' => '🔥В 2019 году был проведен большой объем работ: усиление контроля качества, оптимизация процессов и экономия средств. Подробнее на сайте Bright Park',
            ],
            [
                'url' => 'news/lada_50_years',
                'title' => 'LADA: 50 лет первому автомобилю | Новости Брайт Парк в <:CITY_DATIVE:>',
                'description' => '🔥19 апреля 2020 года исполняется 50 лет с выпуска первых автомобилей марки LADA. Подробнее на сайте Bright Park',
            ],
            [
                'url' => 'news/lada_popular_in_finland',
                'title' => 'LADA популярна в Финляндии | Новости Брайт Парк в <:CITY_DATIVE:>',
                'description' => '🔥Эксперты выяснили, почему российский автомобиль ВАЗ-2101 был в почете у финнов. Подробнее на сайте Bright Park',
            ],
            [
                'url' => 'about',
                'title' => 'О Компании | Брайт Парк в <:CITY_DATIVE:>',
                'description' => 'Информация о компании Брайт Парк в <:CITY_DATIVE:>',
            ],
        ];

        DB::table('seo')->insert($seo);
    }
}
