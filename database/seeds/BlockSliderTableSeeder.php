<?php


use Illuminate\Database\Seeder;

class BlockSliderTableSeeder extends Seeder
{
    public function run()
    {
        $block_sliders = [
            [
                'text' => 'Современная форма кузова Улучшенная аэродинамика автомобиля',
                'image' => '/build/images/photos/models/granta/blocks/block_02/plus/1.jpg',
                'number' => '3',
                'block_id' => '2'
            ],
            [
                'text' => 'Новые диски 15’’ Легкосплавные диски оригинального дизайна с чередующимися двухразмерными спицами и полированной поверхностью',
                'image' => '/build/images/photos/models/granta/blocks/block_02/plus/2.jpg',
                'number' => '5',
                'block_id' => '2'
            ],
            [
                'text' => 'Большие зеркала - Гарантия отличной обзорности',
                'image' => '/build/images/photos/models/granta/blocks/block_02/plus/3.jpg',
                'number' => '1',
                'block_id' => '2'
            ],
            [
                'text' => 'Легкое открытие багажника Наружная электрокнопка отпирания багажника - неотъемлемый атрибут современного комфорта и стиля',
                'image' => '/build/images/photos/models/granta/blocks/block_02/plus/4.jpg',
                'number' => '4',
                'block_id' => '2'
            ],
            [
                'text' => 'Настройка сиденья водителя Регулировка в диапазоне 40 мм',
                'image' => '/build/images/photos/models/granta/blocks/block_02/plus/5.jpg',
                'number' => '2',
                'block_id' => '2'
            ],

            [
                'text' => 'Круиз-контроль повысит комфорт и поможет избежать нарушений скоростного режима во время дальних поездок',
                'image' => '/build/images/photos/models/granta/blocks/block_03/plus/granta_3_1.jpg',
                'number' => '1',
                'block_id' => '3'
            ],
            [
                'text' => 'Освещение салона Функция задержки освещения салона после закрытия двери: освещение гаснет через 25 секунд или сразу после включения зажигания',
                'image' => '/build/images/photos/models/granta/blocks/block_03/plus/granta_3_2.jpg',
                'number' => '2',
                'block_id' => '3'
            ],
            [
                'text' => '«Проводи меня домой» Функция задержки выключения света фар: забота о водителе и пассажирах даже после того, как они покидают машину',
                'image' => '/build/images/photos/models/granta/blocks/block_03/plus/granta_3_3.jpg',
                'number' => '3',
                'block_id' => '3'
            ],
            [
                'text' => 'Акустический комфорт Дополнительная шумоизоляция улучшает виброакустику салона: мягкие подкрылки в арках колес – из специального материала, эффективно гасит «пескоструй» и удары гравия',
                'image' => '/build/images/photos/models/granta/blocks/block_03/plus/granta_3_4.jpg',
                'number' => '4',
                'block_id' => '3'
            ],
            [
                'text' => 'Датчик дождя Незаменимая опция, когда ваш автомобиль окатят мутной водой из соседней лужи и при мелком дожде в долгой поездке',
                'image' => '/build/images/photos/models/granta/blocks/block_03/plus/granta_3_5.jpg',
                'number' => '5',
                'block_id' => '3'
            ],

            [
                'text' => 'ЭРА-ГЛОНАСС Система экстренного оповещения работает даже в случае отключения аккумулятора',
                'image' => '/build/images/photos/models/granta/blocks/block_04/plus/granta_4_5.jpg',
                'number' => '1',
                'block_id' => '4'
            ],
            [
                'text' => 'Подушки безопасности Две фронтальные подушки безопасности – необходимая защита водителя и пассажира',
                'image' => '/build/images/photos/models/granta/blocks/block_04/plus/granta_4_4.jpg',
                'number' => '2',
                'block_id' => '4'
            ],
            [
                'text' => 'Задние датчики парковки. Более надежная страховка при маневрировании задним ходом',
                'image' => '/build/images/photos/models/granta/blocks/block_04/plus/granta_4_6.jpg',
                'number' => '3',
                'block_id' => '4'
            ],
            [
                'text' => 'Курсовая устойчивость (ESC) Предотвращает занос автомобиля',
                'image' => '/build/images/photos/models/granta/blocks/block_04/plus/granta_4_2.jpg',
                'number' => '4',
                'block_id' => '4'
            ],
            [
                'text' => 'Система торможения (ABS+BAS) Антиблокировочная система с усилителем экстренного торможения: сохранение устойчивости и управляемости автомобиля',
                'image' => '/build/images/photos/models/granta/blocks/block_04/plus/granta_4_1.jpg',
                'number' => '5',
                'block_id' => '4'
            ],
            [
                'text' => 'Помощник на подъеме. Система HSA помогает при старте на подъёме. Ощущение уверенности при подъеме (доступно для комплектаций с АМТ)',
                'image' => '/build/images/photos/models/granta/blocks/block_04/plus/granta_4_3.jpg',
                'number' => '6',
                'block_id' => '4'
            ],
        ];

        DB::table('block_sliders')->insert($block_sliders);
    }
}
