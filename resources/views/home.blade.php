<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<section id="panel">
    <ul>
        <li>
            <div class="menu"></div>
            <span>Меню</span>
        </li>
        <li>
            <div class="call"></div>
            <span>Звонок</span>
        </li>
        <li>
            <div class="route"></div>
            <span>Маршрут</span>
        </li>
    </ul>
</section>

<header>
    <div class="logo-wrap">
        <div class="logo-bright-park"></div>
        <div class="logo-lada"></div>
    </div>
    <div class="lada-line">
        <p>Granta лифтбек</p>
    </div>
</header>
<div class="container">
    <section class="auto-slider">
        <ul class="items-mini">
            <li>
                <img src="img/slider/mini/granta/lada_granta_sedan.png" alt="Лада Гранта седан">
                <span>Седан</span>
            </li>
            <li class="active">
                <img src="./img/slider/mini/granta/lada_granta_liftback.png" alt="Лада Гранта лифтбек">
                <span>Лифтбек</span>
            </li>
            <li>
                <img src="./img/slider/mini/granta/lada_granta_universal.png" alt="Лада Гранта универсал">
                <span>Универсал</span>
            </li>
            <li>
                <img src="./img/slider/mini/granta/lada_granta_cross.png" alt="Лада Гранта cross">
                <span>Cross</span>
            </li>
            <li>
                <img src="./img/slider/mini/granta/lada_granta_drive_active.png" alt="Лада Гранта Drive Active">
                <span>Drive Active</span>
            </li>
            <li>
                <img src="./img/slider/mini/granta/lada_granta_hatcback.png" alt="Лада Гранта хэтчбек">
                <span>Хэтчбек</span>
            </li>
        </ul>
        <ul class="items">
            <li class="slide_1">
                <p class="title">LADA Granta Лифтбек</p>
                <p class="sub_title">динамический дизайн<br> и вместительность</p>
                <a href="#">Купить</a>
                <span class="more_details">
						<span>Подробнее</span>
					</span>
            </li>
            <li class="slide_2">
                <p class="title">LADA Granta Лифтбек</p>
                <p class="sub_title">динамический дизайн<br> и вместительность</p>
                <a href="#">Купить</a>
                <span class="more_details">
						<span>Подробнее</span>
					</span>
            </li>
            <li class="slide_3">
                <p class="title">LADA Granta Универсал</p>
                <p class="sub_title">динамический дизайн<br> и вместительность</p>
                <a href="#">Купить</a>
                <span class="more_details">
						<span>Подробнее</span>
					</span>
            </li>
            <li class="slide_4">
                <p class="title">LADA Granta Cross</p>
                <p class="sub_title">динамический дизайн<br> и вместительность</p>
                <a href="#">Купить</a>
                <span class="more_details">
						<span>Подробнее</span>
					</span>
            </li>
            <li class="slide_5">
                <p class="title">LADA Granta Drive Active</p>
                <p class="sub_title">динамический дизайн<br> и вместительность</p>
                <a href="#">Купить</a>
                <span class="more_details">
						<span>Подробнее</span>
					</span>
            </li>
            <li class="slide_6">
                <p class="title">LADA Granta Хэтчбек</p>
                <p class="sub_title">динамический дизайн<br> и вместительность</p>
                <a href="#">Купить</a>
                <span class="more_details">
						<span>Подробнее</span>
					</span>
            </li>
        </ul>
    </section>
    <section class="block block_1">
        <div class="block-text">
            <h2><span class="c_orange">Сочетая</span> самое лучшее</h2>
            <p>Компактный внешне и&nbsp;удивительно просторный внутри. Быстрый, но&nbsp;экономичный. Способный одинаково успешно ездить в&nbsp;любых погодных условиях и&nbsp;в&nbsp;городе, и&nbsp;на&nbsp;трассе, и&nbsp;по&nbsp;проселку. Красивый, комфортный, недорогой. Казалось&nbsp;бы, автомобиль не&nbsp;может сочетать в&nbsp;себе так много плюсов, но&nbsp;LADA Granta&nbsp;&mdash; это под силу.</p>
        </div>
        <div class="block-img">
            <img src="{{ asset('img/blocks/block_01.png') }}" alt="">
        </div>
    </section>
    <section class="block block_2">
        <div class="block-text">
            <h2><span class="c_orange">Новое</span> в знакомом</h2>
            <p>Компактный внешне и&nbsp;удивительно просторный внутри. Быстрый, но&nbsp;экономичный. Способный одинаково успешно ездить в&nbsp;любых погодных условиях и&nbsp;в&nbsp;городе, и&nbsp;на&nbsp;трассе, и&nbsp;по&nbsp;проселку. Красивый, комфортный, недорогой. Казалось&nbsp;бы, автомобиль не&nbsp;может сочетать в&nbsp;себе так много плюсов, но&nbsp;LADA Granta&nbsp;&mdash; это под силу.</p>
        </div>
        <div class="block-img">
            <ul class="pointers-1">
                <li class="p1">+</li>
                <li class="p2">+</li>
                <li class="p3">+</li>
                <li class="p4">+</li>
                <li class="p5">+</li>
            </ul>
            <img src="./img/blocks/block_02.jpg" alt="">
        </div>
    </section>
    <section class="block block_3">
        <div class="block-text">
            <h2><span class="c_orange">Забота</span> о каждом</h2>
            <p>Что может сравниться с&nbsp;той радостью, когда дарят подарок, который ты&nbsp;давно хотел? Только радость человека, которому даришь&nbsp;то, о&nbsp;чем он&nbsp;давно мечтал. Но&nbsp;потребности даже близких людей иногда понять непросто. Хорошо, что есть машина, умеющая учитывать самые разные запросы.</p>
        </div>
        <div class="block-img">
            <ul class="pointers-2">
                <li class="p1">+</li>
                <li class="p2">+</li>
                <li class="p3">+</li>
                <li class="p4">+</li>
                <li class="p5">+</li>
            </ul>
            <img src="./img/blocks/block_03.png" alt="">
        </div>
    </section>
    <section class="block block_4">
        <div class="block-text">
            <h2><span class="c_orange">Ответственность</span> и безопасность</h2>
            <p>Мир скоростей требует повышенного внимания. И повышенной отдачи: я слежу не только за собой, но и помогаю близким. А технологии помогают мне – ощутимо и эффективно! Особенно когда это комплекс электронных помощников водителя.<br><br>
                Благодаря проработанной силовой структуре кузова и современным системам безопасности LADA Granta лифтбек выполняет российские и европейские требования по защите водителя, пассажиров и пешеходов.</p>
        </div>
        <div class="block-img">
            <ul class="pointers-3">
                <li class="p1">+</li>
                <li class="p2">+</li>
                <li class="p3">+</li>
                <li class="p4">+</li>
                <li class="p5">+</li>
                <li class="p6">+</li>
            </ul>
            <img src="./img/blocks/block_04.png" alt="">
        </div>
    </section>
    <section class="block change-color">
        <div class="block-text">
            <h2><span class="c_orange">Цвет</span> притягивает взгляды</h2>
        </div>
        <div class="car-color">
            <div class="backlight"></div>
            <img src="./img/colors/lada_granta_blue.png" alt="">
        </div>
        <div class="palette">
            <div class="color-name">Голубая планета</div>
            <ul>
                <li class="active">
                    <div class="circle color-blue-planet" data-name="Голубая планета"></div>
                </li>
                <li>
                    <div class="circle color-cornelian" data-name="Сердолик"></div>
                </li>
                <li>
                    <div class="circle color-white-cloud" data-name="Белое облако"></div>
                </li>
                <li>
                    <div class="circle color-panther" data-name="Пантера"></div>
                </li>
                <li>
                    <div class="circle color-riesling" data-name="Рислинг"></div>
                </li>
                <li>
                    <div class="circle color-techno" data-name="Техно"></div>
                </li>
                <li>
                    <div class="circle color-borneo" data-name="Борнео"></div>
                </li>
                <li>
                    <div class="circle color-coriander" data-name="Кориандр"></div>
                </li>
            </ul>
        </div>
    </section>
    <section class="block form">
        <div class="block-text">
            <h2><span class="c_orange">Попробуйте</span> сами</h2>
            <p class="note_1">Расширенный тест-драйв в Брайт парке</p>
        </div>
        <form action="" id="form_test-drive" method="POST" name="feedback">
            <input type="text" class="" name="name" placeholder="Имя">
            <input type="text" class="" name="phone" placeholder="Телефон">
            <button>Записаться</button>
        </form>
    </section>
    <section class="block block_4">
        <div class="block-text">
            <h2><span class="c_orange">Эксперты</span> о Lada Granta</h2>
        </div>

        <div class="opinions">
            <ul class="opinion-slider">
                <li>
                    <blockquote cite="https://www.kolesa.ru/article/pyat-veshhej-za-kotorye-lyubyat-i-nenavidyat-lada-granta">
                        <p>Гранта сделана в&nbsp;России и&nbsp;специально для России. Клиренс в&nbsp;165&nbsp;мм хвалят очень многие владельцы этого авто</p>
                        <footer>портал <cite>КОЛЕСА.ру</cite></footer>
                    </blockquote>
                </li>
                <li>
                    <blockquote cite="https://www.kolesa.ru/article/pyat-veshhej-za-kotorye-lyubyat-i-nenavidyat-lada-granta">
                        <p>Гранта сделана в&nbsp;России и&nbsp;специально для России. Клиренс в&nbsp;165&nbsp;мм хвалят очень многие владельцы этого авто</p>
                        <footer>портал <cite>КОЛЕСА.ру</cite></footer>
                    </blockquote>
                </li>
                <li>
                    <blockquote cite="https://www.kolesa.ru/article/pyat-veshhej-za-kotorye-lyubyat-i-nenavidyat-lada-granta">
                        <p>Гранта сделана в&nbsp;России и&nbsp;специально для России. Клиренс в&nbsp;165&nbsp;мм хвалят очень многие владельцы этого авто</p>
                        <footer>портал <cite>КОЛЕСА.ру</cite></footer>
                    </blockquote>
                </li>
                <li>
                    <blockquote cite="https://www.kolesa.ru/article/pyat-veshhej-za-kotorye-lyubyat-i-nenavidyat-lada-granta">
                        <p>Гранта сделана в&nbsp;России и&nbsp;специально для России. Клиренс в&nbsp;165&nbsp;мм хвалят очень многие владельцы этого авто</p>
                        <footer>портал <cite>КОЛЕСА.ру</cite></footer>
                    </blockquote>
                </li>
                <li>
                    <blockquote cite="https://www.kolesa.ru/article/pyat-veshhej-za-kotorye-lyubyat-i-nenavidyat-lada-granta">
                        <p>Гранта сделана в&nbsp;России и&nbsp;специально для России. Клиренс в&nbsp;165&nbsp;мм хвалят очень многие владельцы этого авто</p>
                        <footer>портал <cite>КОЛЕСА.ру</cite></footer>
                    </blockquote>
                </li>
                <li>
                    <blockquote cite="https://www.kolesa.ru/article/pyat-veshhej-za-kotorye-lyubyat-i-nenavidyat-lada-granta">
                        <p>Гранта сделана в&nbsp;России и&nbsp;специально для России. Клиренс в&nbsp;165&nbsp;мм хвалят очень многие владельцы этого авто</p>
                        <footer>портал <cite>КОЛЕСА.ру</cite></footer>
                    </blockquote>
                </li>
                <li>
                    <blockquote cite="https://www.kolesa.ru/article/pyat-veshhej-za-kotorye-lyubyat-i-nenavidyat-lada-granta">
                        <p>Гранта сделана в&nbsp;России и&nbsp;специально для России. Клиренс в&nbsp;165&nbsp;мм хвалят очень многие владельцы этого авто</p>
                        <footer>портал <cite>КОЛЕСА.ру</cite></footer>
                    </blockquote>
                </li>
            </ul>
            <div class="opinion-numbers">
                <ul>
                    <li>
                        <span></span>
                    </li>
                    <li class="active">
                        <span></span>
                    </li>
                    <li>
                        <span></span>
                    </li>
                    <li>
                        <span></span>
                    </li>
                    <li>
                        <span></span>
                    </li>
                    <li>
                        <span></span>
                    </li>
                    <li>
                        <span></span>
                    </li>
                </ul>
            </div>
        </div>
        <div class="trigger-wrap">
            <p>98% клиентов оставили положительные отзывы о&nbsp;Granta лифтбек</p>
        </div>
        <div class="photo_block">
            <div class="feedback_01">
                <img src="./img/photos/feedback/feedback_01.png" alt="">
            </div>
            <div class="feedback_02">
                <img src="./img/photos/feedback/feedback_02.png" alt="">
            </div>
            <div class="feedback_03">
                <img src="./img/photos/feedback/feedback_03.png" alt="">
            </div>
        </div>
    </section>
    <section class="block block_5">
        <div class="block-text">
            <h2><span class="c_orange">Гарантия</span> 3 года</h2>
            <p>На&nbsp;вашу новенькую LADA Granta лифтбек действует расширенная гарантия 3&nbsp;года.</p>
        </div>
    </section>
    <section class="block next_action">
        <div class="block-text">
            <h2><span class="c_orange">Ваше</span> следующее действие</h2>
        </div>
        <ul>
            <li>
                <a class="btn" href="#" onclick="return false;">Записаться на тест-драйв</a>
            </li>
            <li>
                <a class="btn" href="#" onclick="return false;">Рассчитать кредит</a>
            </li>
            <li>
                <a class="btn" href="#" onclick="return false;">Оценить свой автомобиль</a>
            </li>
            <li>
                <a class="btn" href="#" onclick="return false;">Получить спецпредложение</a>
            </li>
        </ul>
    </section>
    <footer class="block footer">
        <div class="block-text center mb">
            <p>Помощь при покупке<br> У&nbsp;вас есть вопросы? Пообщайтесь со&nbsp;специалистом по&nbsp;телефону&nbsp;<br><a class="phone" href="tel:+73422148800">+7 (342) 214-88-00</a></p>
            <p>Брайт парк ближе, чем кажется<br> Проложите маршрут до&nbsp;ближайшего салона</p>
            <a class="btn" href="#" onclick="return false;">Проложить маршрут</a>
        </div>
        <div class="map">
            <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A835db353a68100909105f85f9e9a5b504f478330f77575a2b3f5ee8fd1053d2b&amp;width=100%25&amp;height=400&amp;lang=ru_RU&amp;scroll=true"></script>
        </div>
    </footer>
</div>
<!-- Scripts -->
<script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>
