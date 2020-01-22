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
                    'link' => '#',
                    ],
                    [
                        'class' => 'slide_2',
                        'title' => 'LADA Granta лифтбек',
                        'reduction' => 'Granta лифтбек',
                        'subtitle' => 'динамический дизайн<br> и вместительность',
                        'link' => '#',
                    ],
                    [
                        'class' => 'slide_3',
                        'title' => 'LADA Granta универсал',
                        'reduction' => 'Granta универсал',
                        'subtitle' => 'динамический дизайн<br> и вместительность',
                        'link' => '#',
                    ],
                    [
                        'class' => 'slide_4',
                        'title' => 'LADA Granta Cross',
                        'reduction' => 'Granta Cross',
                        'subtitle' => 'динамический дизайн<br> и вместительность',
                        'link' => '#',
                    ],
                    [
                        'class' => 'slide_5',
                        'title' => 'LADA Granta Drive Active',
                        'reduction' => 'Granta drive active',
                        'subtitle' => 'динамический дизайн<br> и вместительность',
                        'link' => '#',
                    ],
                    [
                        'class' => 'slide_6',
                        'title' => 'LADA Granta хэтчбек',
                        'reduction' => 'Granta хэтчбек',
                        'subtitle' => 'динамический дизайн<br> и вместительность',
                        'link' => '#',
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
                ],
                [
                    'title' => '<span class="c_orange">Новое</span> в знакомом',
                    'text' => 'Компактный внешне и удивительно просторный внутри. Быстрый, но экономичный. Способный одинаково успешно ездить в любых погодных условиях и в городе, и на трассе, и по проселку. Красивый, комфортный, недорогой. Казалось бы, автомобиль не может сочетать в себе так много плюсов, но LADA Granta — это под силу.',
                    'url' => 'build/images/blocks/mobile/block_02.jpg',
                    'pointers' => 5,
                    'pnum' => 1,
                ],
                [
                    'title' => '<span class="c_orange">Забота</span> о каждом',
                    'text' => 'Что может сравниться с той радостью, когда дарят подарок, который ты давно хотел? Только радость человека, которому даришь то, о чем он давно мечтал. Но потребности даже близких людей иногда понять непросто. Хорошо, что есть машина, умеющая учитывать самые разные запросы.',
                    'url' => 'build/images/blocks/block_03.png',
                    'pointers' => 5,
                    'pnum' => 2,
                ],
                [
                    'title' => '<span class="c_orange">Ответственность</span> и безопасность',
                    'text' => 'Мир скоростей требует повышенного внимания. И повышенной отдачи: я слежу не только за собой, но и помогаю близким. А технологии помогают мне – ощутимо и эффективно! Особенно когда это комплекс электронных помощников водителя.<br><br> Благодаря проработанной силовой структуре кузова и современным системам безопасности LADA Granta лифтбек выполняет российские и европейские требования по защите водителя, пассажиров и пешеходов.',
                    'url' => 'build/images/blocks/block_04.png',
                    'pointers' => 6,
                    'pnum' => 3,
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
}
