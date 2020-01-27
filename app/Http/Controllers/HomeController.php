<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function main()
    {
        return view('main');
    }

    /**
     * Show first version of design.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function basic()
    {
        $data = [
            'slider' => [
                'slides_mini' => [
                    [
                        'image' => 'build/images/slider/mini/granta/mobile/lada_granta_sedan.png',
                        'alt' => 'Лада Гранта седан',
                        'title' => 'Седан'
                    ],
                    [
                        'image' => 'build/images/slider/mini/granta/mobile/lada_granta_liftback.png',
                        'alt' =>  'Лада Гранта лифтбек',
                        'title' => 'Лифтбек'
                    ],
                    [
                        'image' => 'build/images/slider/mini/granta/mobile/lada_granta_universal.png',
                        'alt' => 'Лада Гранта универсал',
                        'title' => 'Универсал'
                    ],
                    [
                        'image' => 'build/images/slider/mini/granta/mobile/lada_granta_cross.png',
                        'alt'=> 'Лада Гранта cross',
                        'title' => 'Cross'
                    ],
                    [
                        'image' => 'build/images/slider/mini/granta/mobile/lada_granta_drive_active.png',
                        'alt' => 'Лада Гранта Drive Active',
                        'title' => 'Drive Active'
                    ],
                    [
                        'image' => 'build/images/slider/mini/granta/mobile/lada_granta_hatcback.png',
                        'alt' => 'Лада Гранта хэтчбек',
                        'title' => 'Хэтчбек'
                    ],
                ],
                'slides' => [
                    [
                    'class' => 'slide_1',
                    'title' => 'LADA Granta седан',
                    'reduction' => 'Granta седан',
                    'subtitle' => 'динамический дизайн<br> и вместительность',
                    'link' => '/model_details',
                    ],
                    [
                        'class' => 'slide_2',
                        'title' => 'LADA Granta лифтбек',
                        'reduction' => 'Granta лифтбек',
                        'subtitle' => 'динамический дизайн<br> и вместительность',
                        'link' => '/model_details',
                    ],
                    [
                        'class' => 'slide_3',
                        'title' => 'LADA Granta универсал',
                        'reduction' => 'Granta универсал',
                        'subtitle' => 'динамический дизайн<br> и вместительность',
                        'link' => '/model_details',
                    ],
                    [
                        'class' => 'slide_4',
                        'title' => 'LADA Granta Cross',
                        'reduction' => 'Granta Cross',
                        'subtitle' => 'динамический дизайн<br> и вместительность',
                        'link' => '/model_details',
                    ],
                    [
                        'class' => 'slide_5',
                        'title' => 'LADA Granta Drive Active',
                        'reduction' => 'Granta drive active',
                        'subtitle' => 'динамический дизайн<br> и вместительность',
                        'link' => '/model_details',
                    ],
                    [
                        'class' => 'slide_6',
                        'title' => 'LADA Granta хэтчбек',
                        'reduction' => 'Granta хэтчбек',
                        'subtitle' => 'динамический дизайн<br> и вместительность',
                        'link' => '/model_details',
                    ],
                ],
            ],
            'blocks' => [
                [
                    'title' => '<span class="c_orange">Сочетая</span> самое лучшее',
                    'text' => 'Компактный внешне и удивительно просторный внутри. Быстрый, но экономичный. Способный одинаково успешно ездить в любых погодных условиях и в городе, и на трассе, и по проселку. Красивый, комфортный, недорогой. Казалось бы, автомобиль не может сочетать в себе так много плюсов, но LADA Granta — это под силу.',
                    'url' => 'build/images/blocks/block_01.png',
                    'pointers' => 0,
                    'pnum' => 0,
                    'show' => false,
                    'slider' => []
                ],
                [
                    'title' => '<span class="c_orange">Новое</span> в знакомом',
                    'text' => 'Компактный внешне и удивительно просторный внутри. Быстрый, но экономичный. Способный одинаково успешно ездить в любых погодных условиях и в городе, и на трассе, и по проселку. Красивый, комфортный, недорогой. Казалось бы, автомобиль не может сочетать в себе так много плюсов, но LADA Granta — это под силу.',
                    'url' => 'build/images/blocks/mobile/block_02.jpg',
                    'pointers' => 5,
                    'pnum' => 1,
                    'show' => false,
                    'slider' => [
                        1 => [
                            'text' => 'Современная форма кузова Улучшенная аэродинамика автомобиля',
                            'image' => 'build/images/info/1/1.png'
                        ],
                        2 => [
                            'text' => 'Большие зеркала - Гарантия отличной обзорности',
                            'image' => 'build/images/info/1/2.png'
                        ],
                        3 => [
                            'text' => 'Новые диски 15’’ Легкосплавные диски оригинального дизайна с чередующимися двухразмерными спицами и полированной поверхностью',
                            'image' => 'build/images/info/1/3.png'
                        ],
                        4 => [
                            'text' => 'Легкое открытие багажника Наружная электрокнопка отпирания багажника - неотъемлемый атрибут современного комфорта и стиля',
                            'image' => 'build/images/info/1/4.png'
                        ],
                        5 => [
                            'text' => 'Настройка сиденья водителя Регулировка в диапазоне 40 мм',
                            'image' => 'build/images/info/1/5.png'
                        ],
                    ]
                ],
                [
                    'title' => '<span class="c_orange">Забота</span> о каждом',
                    'text' => 'Что может сравниться с той радостью, когда дарят подарок, который ты давно хотел? Только радость человека, которому даришь то, о чем он давно мечтал. Но потребности даже близких людей иногда понять непросто. Хорошо, что есть машина, умеющая учитывать самые разные запросы.',
                    'url' => 'build/images/blocks/block_03.png',
                    'pointers' => 5,
                    'pnum' => 2,
                    'show' => false,
                    'slider' => [
                        1 => [
                            'text' => 'Настройка сиденья водителя Регулировка в диапазоне 40 мм',
                            'image' => 'build/images/info/1/1.png'
                            ],
                        2 => [
                            'text' => 'Круиз контроль Повысит контроль и поможет избежать нарушений скоростного режима во время дальних поездок',
                            'image' => 'build/images/info/1/1.png'
                            ],
                        3 => [
                            'text' => 'Освещение салона Функция задержки освещения салона после закрытия двери: освещение гаснет через 25 секунд или сразу после включения зажигания',
                            'image' => 'build/images/info/1/1.png'
                            ],
                        4 => [
                            'text' => '«Проводи меня домой» Функция задержки выключения света фар: забота о водителе и пассажирах даже после того, как они покидают машину',
                            'image' => 'build/images/info/1/1.png'
                            ],
                        5 => [
                            'text' => 'Акустический комфорт Дополнительная шумоизоляция улучшает виброакустику салона: мягкие подкрылки в арках колес - из специального материала, эффективно гасит «пескоструй» и удары гравия',
                            'image' => 'build/images/info/1/1.png'
                            ]
                    ]
                ],
                [
                    'title' => '<span class="c_orange">Ответственность</span> и безопасность',
                    'text' => 'Мир скоростей требует повышенного внимания. И повышенной отдачи: я слежу не только за собой, но и помогаю близким. А технологии помогают мне – ощутимо и эффективно! Особенно когда это комплекс электронных помощников водителя.<br><br> Благодаря проработанной силовой структуре кузова и современным системам безопасности LADA Granta лифтбек выполняет российские и европейские требования по защите водителя, пассажиров и пешеходов.',
                    'url' => 'build/images/blocks/block_04.png',
                    'pointers' => 6,
                    'pnum' => 3,
                    'show' => false,
                    'slider' => [
                        1 => [
                            'text' => 'Подушки безопасности Две фронтальные подушки безопасности – необходимая защита водителя и пассажира 1',
                            'image' => 'build/images/info/1/1.png'
                            ],
                        2 => [
                            'text' => 'Подушки безопасности Две фронтальные подушки безопасности – необходимая защита водителя и пассажира 2',
                            'image' => 'build/images/info/1/1.png'
                            ],
                        3 => [
                            'text' => 'Подушки безопасности Две фронтальные подушки безопасности – необходимая защита водителя и пассажира 3',
                            'image' => 'build/images/info/1/1.png'
                            ],
                        4 => [
                            'text' => 'Подушки безопасности Две фронтальные подушки безопасности – необходимая защита водителя и пассажира 4',
                            'image' => 'build/images/info/1/1.png'
                            ],
                        5 => [
                            'text' => 'Подушки безопасности Две фронтальные подушки безопасности – необходимая защита водителя и пассажира 5',
                            'image' => 'build/images/info/1/1.png'
                            ],
                        6 => [
                            'text' => 'Подушки безопасности Две фронтальные подушки безопасности – необходимая защита водителя и пассажира 6',
                            'image' => 'build/images/info/1/1.png'
                        ]
                    ]
                ]
            ],
            'colors' => [
                [
                    'title' => 'Голубая планета',
                    'image' => 'build/images/colors/lada/granta/lada_granta_blue_planet.png',
                    'class' => 'color-blue-planet',
                    'is_active' => true
                ],
                [
                    'title' => 'Сердолик',
                    'image' => 'build/images/colors/lada/granta/lada_granta_cornelian.png',
                    'class' => 'color-cornelian',
                    'is_active' => false
                ],
                [
                    'title' => 'Белое облако',
                    'image' => 'build/images/colors/lada/granta/lada_granta_white_cloud.png',
                    'class' => 'color-white-cloud',
                    'is_active' => false
                ],
                [
                    'title' => 'Пантера',
                    'image' => 'build/images/colors/lada/granta/lada_granta_panther.png',
                    'class' => 'color-panther',
                    'is_active' => false
                ],
                [
                    'title' => 'Рислинг',
                    'image' => 'build/images/colors/lada/granta/lada_granta_riesling.png',
                    'class' => 'color-riesling',
                    'is_active' => false
                ],
                [
                    'title' => 'Техно',
                    'image' => 'build/images/colors/lada/granta/lada_granta_techno.png',
                    'class' => 'color-techno',
                    'is_active' => false
                ],
                [
                    'title' => 'Борнео',
                    'image' => 'build/images/colors/lada/granta/lada_granta_borneo.png',
                    'class' => 'color-borneo',
                    'is_active' => false
                ],
                [
                    'title' => 'Кориандр',
                    'image' => 'build/images/colors/lada/granta/lada_granta_coriander.png',
                    'class' => 'color-coriander',
                    'is_active' => false
                ],
            ],
            'reviews' => [
                [
                    'url' => 'https://www.kolesa.ru/article/pyat-veshhej-za-kotorye-lyubyat-i-nenavidyat-lada-granta',
                    'quote' => 'Гранта сделана в России и специально для России. Клиренс в 165 мм хвалят очень многие владельцы этого авто',
                    'author' => 'портал <cite>КОЛЕСА.ру</cite>'
                ],
                [
                    'url' => 'https://www.kolesa.ru/article/pyat-veshhej-za-kotorye-lyubyat-i-nenavidyat-lada-granta',
                    'quote' => 'Обновлённая Гранта предлагается с четырьмя типами кузова: кроме традиционного седана, это лифтбек, хэтчбек и даже универсал! ',
                    'author' => 'портал <cite>КОЛЕСА.ру</cite>'
                ],
                [
                    'url' => 'https://www.kolesa.ru/article/pyat-veshhej-za-kotorye-lyubyat-i-nenavidyat-lada-granta',
                    'quote' => 'Среди покупателей этой машины до сих пор много тех, кто и техобслуживание, и ремонт ведёт своими силами, в гараже.',
                    'author' => 'портал <cite>КОЛЕСА.ру</cite>'
                ]
            ]
        ];

        return view('basic', [ 'data' => $data ]);
    }

    /**
     * Show second version of design.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function alt_menu()
    {
        return view('alt_menu');
    }

    public function model_details()
    {
        return view('model_details');
    }

    public function trade_in_calc()
    {
        return view('trade_in_calc');
    }
}
