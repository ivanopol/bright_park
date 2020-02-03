@extends('layouts.app2')

@section('content')
    <tab-bar></tab-bar>
    <header-component :line="true" :theme="'light'"></header-component>
    <div class="container">
        <hooper-component :data='@json($data['slider'])' ></hooper-component>
        <info-component :data='@json($data['blocks'][0])'></info-component>
        <info-component :data='@json($data['blocks'][1])' :n="1"></info-component>
        <info-component :data='@json($data['blocks'][2])' :n="2"></info-component>
        <info-component :data='@json($data['blocks'][3])' :n="3"></info-component>
        <color-choose-component :colors='@json($data['colors'])'></color-choose-component>
        <form-component></form-component>

        <section class="block block_4">
            <div class="block-text">
                <h2><span class="c_orange">Эксперты</span> о Lada Granta</h2>
            </div>

            <div class="opinions">
                <review-component :reviews='@json($data['reviews'])'></review-component>
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
