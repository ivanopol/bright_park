<?php

use Illuminate\Database\Seeder;

class NewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $news = [
            [
                'title' => 'Предложение месяца от LADA: всё включено!',
                'text' => '<p>LADA объявляет о новых предложениях, позволяющих приобрести автомобили на максимально выгодных условиях в марте, главным из которых является то, что все модели LADA участвуют в госпрограмме*.
Кроме этого, введена дополнительная выгода на приобретение LADA Vesta Sport и LADA XRAY** (50 тысяч рублей по программе Trade-In) - эти выгоды можно суммировать с другими акциями и государственными программами.</p>
<p>Также в марте 2020 года продолжают действовать следующие программы:
<ul>
<li>Trade-In: выгода от 20 до 50 тысяч рублей при сдаче поддержанного автомобиля в зачет нового; условия акции суммируются с выгодой по госпрограмме «Семейный автомобиль»;</li>
<li>LADA FINANCE: выгода от 20 до 40 тысяч рублей при покупке автомобиля по собственной программе кредитования;</li>
<li>LADA Leasing: выгода от 30 до 40 тысяч рублей при покупке автомобиля в лизинг;</li>
<li>Продажа автомобилей 2019 года выпуска: выгода составляет от 10 до 40 тысяч рублей.</li>
</ul>
Подробно об условиях акций можно узнать на сайте lada.ru и у официальных дилеров LADA.
</p>',
                'text_short' => 'LADA объявляет о новых предложениях, позволяющих приобрести автомобили на максимально выгодных условиях в марте, главным из которых является то, что все модели LADA участвуют в госпрограмме',
                'preview' => '/build/images/news/new_01.jpg',
                'slug' => 'predlozhenie_mesyaca_ot_lada_vsyo_vklyucheno',
                'city_id' => 0,
            ],
            [
                'title' => 'Долгожданная LADA Vesta Sport!',
                'text' => '<p>Уже в марте LADA Vesta Sport на тест-драйве в Брайт Парке. Познакомьтесь с автомобилем лично)</p><p>Ждём вас каждый день!</p>',
                'text_short' => 'Уже в марте LADA Vesta Sport на тест-драйве в Брайт Парке.',
                'preview' => '/build/images/news/new_02.jpg',
                'slug' => 'dolgozhdannaya_lada_vesta_sport',
                'city_id' => 0,
            ],
        ];
        DB::table('news')->insert($news);
    }
}