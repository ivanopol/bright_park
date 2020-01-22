@extends('layouts.app2')

@section('content')
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
            <p id="model-active"></p>
        </div>
    </header>

    <div class="container">
        <hooper-component :data='@json($data['slider'])' ></hooper-component>
        <info-component :data='@json($data['blocks'][0])'></info-component>
        <info-component :data='@json($data['blocks'][1])'></info-component>
        <info-component :data='@json($data['blocks'][2])'></info-component>
        <info-component :data='@json($data['blocks'][3])'></info-component>
        <color-choose-component :colors='@json($data['colors'])'></color-choose-component>
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
                    <img src="build/images/photos/feedback/feedback_01.png" alt="">
                </div>
                <div class="feedback_02">
                    <img src="build/images/photos/feedback/feedback_02.png" alt="">
                </div>
                <div class="feedback_03">
                    <img src="build/images/photos/feedback/feedback_03.png" alt="">
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
                <script type="application/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A835db353a68100909105f85f9e9a5b504f478330f77575a2b3f5ee8fd1053d2b&amp;width=100%25&amp;height=400&amp;lang=ru_RU&amp;scroll=true"/>
            </div>
        </footer>
    </div>
@endsection
