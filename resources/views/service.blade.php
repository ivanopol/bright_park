@extends('layouts.app2')

@section('content')
    <tab-bar :theme="'dark'" :cities='@json($cities)' :models='@json($models)' :phone="'{{$cities['active']['phone']}}'"></tab-bar>
    <header-sticky-component :theme="'light'" :city="'{{$city}}'"></header-sticky-component>
    <header-component :absolute="true"  :theme="'light'" :city="'{{$city}}'" ></header-component>
    <section class="main-screen">

    </section>
    <div class="container">
        <div id="advantages" class="advantages_wrap retargeting_wrap">
            <h1><span class="c_orange">Наши</span> преимущества</h1>
            <ul>
                <li>
                    <div class="advantage">
                        <span class="icon"><img src="/build/images/icons/service/best_prices.svg" alt="Брайт Парк сервис: Лучшие цены в городе"></span>
                        <span class="text">Лучшие цены в городе</span>
                    </div>
                </li>
                <li>
                    <div class="advantage">
                        <span class="icon"><img src="/build/images/icons/service/experience.svg" alt="Брайт Парк сервис: Стаж мастеров от 10 лет"></span>
                        <span class="text">Стаж мастеров от 10 лет</span>
                    </div>
                </li>
                <li>
                    <div class="advantage">
                        <span class="icon"><img src="/build/images/icons/service/garanty.svg" alt="Брайт Парк сервис: Гарантия на услуги 1 год"></span>
                        <span class="text">Гарантия на услуги 1 год</span>
                    </div>
                </li>
                <li>
                    <div class="advantage">
                        <span class="icon"><img src="/build/images/icons/service/car_state.svg" alt="Брайт Парк: Отчёт о состоянии А/М при выдаче"></span>
                        <span class="text">Отчёт о&nbsp;состоянии А/М при выдаче</span>
                    </div>
                </li>
            </ul>
        </div>
        <form-retarget-component :cities='@json($cities)' :form_id="'service__form'" :button_text="'Записаться на сервис'" :form_title="'<span class=\'c_orange\'>Заполните</span> форму'"></form-retarget-component>
    </div>
    <footer class="block footer">
        <div class="block-text center mb">
            <h2><span class="c_orange">Брайт Парк </span> всегда на связи</h2>
            <p>У&nbsp;вас есть вопросы? Пообщайтесь со&nbsp;специалистом по&nbsp;телефону&nbsp;<br>
                <a href="tel:{{$cities['active']['phone']}}" id="main__footer_call" class="btn btn btn-primary btn-position green callibri_phone">Позвонить</a></p>
            <p>Брайт парк ближе, чем кажется<br> Проложите маршрут до ближайшего салона</p>
        </div>
        <yandex-map-component :coordinates='@json($data['coordinates'])'></yandex-map-component>
    </footer>
    {!! html_entity_decode($cities['active']['begin_script']) !!}
    <scroll-event-handler-component></scroll-event-handler-component>
    <event-handler-component></event-handler-component>
@endsection
