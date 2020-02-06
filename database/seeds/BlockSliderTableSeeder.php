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
            [
                'text' => 'Бескаркасные стеклоочистители – работают эффективно и не склонны к обмерзанию',
                'image' => '/build/images/photos/models/vesta/blocks/block_02/plus/vesta_2_1.jpg',
                'number' => '1',
                'block_id' => '6'
            ],
            [
                'text' => 'Антенна в форме акульего плавника',
                'image' => '/build/images/photos/models/vesta/blocks/block_02/plus/vesta_2_2.jpg',
                'number' => '2',
                'block_id' => '6'
            ],
            [
                'text' => 'Мультимедийная система с 7-дюймовым экраном поможет создать нужное настроение в поездке.',
                'image' => '/build/images/photos/models/vesta/blocks/block_03/plus/vesta_1.jpg',
                'number' => '1',
                'block_id' => '7'
            ],
            [
                'text' => 'Бесступенчатая автоматическая коробка передач японской фирмы Jatco',
                'image' => '/build/images/photos/models/vesta/blocks/block_03/plus/vesta_3_1.jpg',
                'number' => '2',
                'block_id' => '7'
            ],
            [
                'text' => 'Теплая опция для российских зим – обогрев руля. LADA Vesta согревает!',
                'image' => '/build/images/photos/models/vesta/blocks/block_03/plus/vesta_3_2.jpg',
                'number' => '3',
                'block_id' => '7'
            ],
            [
                'text' => 'Трансформация багажного отсека',
                'image' => '/build/images/photos/models/vesta/blocks/block_03/plus/vesta_4.jpg',
                'number' => '4',
                'block_id' => '7'
            ],
            [
                'text' => 'Охлаждаемый перчаточный ящик',
                'image' => '/build/images/photos/models/xray/blocks/block_02/plus/xray_2_1.jpg',
                'number' => '1',
                'block_id' => '10'
            ],
            [
                'text' => 'Просторный салон с нишами для хранения',
                'image' => '/build/images/photos/models/xray/blocks/block_02/plus/xray_2_2.jpg',
                'number' => '2',
                'block_id' => '10'
            ],
            [
                'text' => 'климат-контроль',
                'image' => '/build/images/photos/models/xray/blocks/block_02/plus/xray_2_3.jpg',
                'number' => '3',
                'block_id' => '10'
            ],
            [
                'text' => 'мультимедийная система с 7" цветным дисплеем',
                'image' => '/build/images/photos/models/xray/blocks/block_02/plus/xray_2_4.jpg',
                'number' => '4',
                'block_id' => '10'
            ],
        ];

        DB::table('block_sliders')->insert($block_sliders);
    }
}
