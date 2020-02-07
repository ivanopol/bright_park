@extends('layouts.app2')

@section('content')
    <tab-bar></tab-bar>
    <header-component :line="true" :theme="'light'"></header-component>
    <div class="container">
        <hooper-component :data='@json($data['slider'])' ></hooper-component>

        @foreach ($data['blocks'] as $key => $block)
            <info-component :data='@json($block)' :n='@json($key)' :model='@json($data['model_id'])' :type='@json($data['type_id'])'></info-component>
        @endforeach

        <color-choose-component :colors='@json($data['colors'])'></color-choose-component>
        <form-component></form-component>

        <section class="block block_4">
            <div class="block-text">
                <h2><span class="c_orange">Эксперты</span> о {{ $data['model_full'] }}</h2>
            </div>

            <div class="opinions">
                <review-component :reviews='@json($data['reviews'])'></review-component>
            </div>
            <div class="trigger-wrap">
                <p>98% клиентов оставили положительные отзывы о&nbsp;{{ $data['model_full'] }}</p>
            </div>
            <div class="photo_block">
                <div class="feedback">
                    <img src="{{asset('/build/images/photos/feedback/feedback_04.jpg')}}" alt="">
                </div>
            </div>
        </section>
        <section class="block block_5">
            <div class="block-text">
                <h2><span class="c_orange">Гарантия</span> 3 года</h2>
                <p>На&nbsp;вашу новенькую Лада {{ $data['model_full'] }} действует расширенная гарантия 3&nbsp;года.</p>
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
            <div class="map-wrapper">
                <yandex-map-component></yandex-map-component>
            </div>
        </footer>
    </div>
@endsection
