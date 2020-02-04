<?php


use Illuminate\Database\Seeder;

class BlockTableSeeder extends Seeder
{
    public function run()
    {
        $blocks = [
            [
                'model_id' => 1,
                'type_id' => 1,
                'title' => '<span class="c_orange">Сочетая</span> самое лучшее',
                'text' => 'Компактный внешне и удивительно просторный внутри. Быстрый, но экономичный. Способный одинаково успешно ездить в любых погодных условиях и в городе, и на трассе, и по проселку. Красивый, комфортный, недорогой. Казалось бы, автомобиль не может сочетать в себе так много плюсов, но LADA Granta — это под силу.',
                'url' => '/build/images/blocks/block_01.png',
                'pointers' => 0,
                'pnum' => 0,
                'show' => false
            ],
            [
                'model_id' => 1,
                'type_id' => 1,
                'title' => '<span class="c_orange">Новое</span> в знакомом',
                'text' => 'Компактный внешне и удивительно просторный внутри. Быстрый, но экономичный. Способный одинаково успешно ездить в любых погодных условиях и в городе, и на трассе, и по проселку. Красивый, комфортный, недорогой. Казалось бы, автомобиль не может сочетать в себе так много плюсов, но LADA Granta — это под силу.',
                'url' => '/build/images/blocks/mobile/block_02.jpg',
                'pointers' => 5,
                'pnum' => 1,
                'show' => false
            ],
            [
                'model_id' => 1,
                'type_id' => 1,
                'title' => '<span class="c_orange">Забота</span> о каждом',
                'text' => 'Что может сравниться с той радостью, когда дарят подарок, который ты давно хотел? Только радость человека, которому даришь то, о чем он давно мечтал. Но потребности даже близких людей иногда понять непросто. Хорошо, что есть машина, умеющая учитывать самые разные запросы.',
                'url' => '/build/images/blocks/block_03.png',
                'pointers' => 5,
                'pnum' => 2,
                'show' => false,
            ],
            [
                'model_id' => 1,
                'type_id' => 1,
                'title' => '<span class="c_orange">Ответственность</span> и безопасность',
                'text' => 'Мир скоростей требует повышенного внимания. И повышенной отдачи: я слежу не только за собой, но и помогаю близким. А технологии помогают мне – ощутимо и эффективно! Особенно когда это комплекс электронных помощников водителя.<br><br> Благодаря проработанной силовой структуре кузова и современным системам безопасности LADA Granta лифтбек выполняет российские и европейские требования по защите водителя, пассажиров и пешеходов.',
                'url' => '/build/images/blocks/block_04.png',
                'pointers' => 6,
                'pnum' => 3,
                'show' => false,
            ]
        ];

        DB::table('blocks')->insert($blocks);
    }
}
