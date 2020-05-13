@extends('layouts.app2')

@section('content')
    <tab-bar :theme="'dark'" :cities='@json($cities)' :models='@json($models)' :phone="'{{$cities['active']['phone']}}'"></tab-bar>
    <header-sticky-component :theme="'light'" :city="'{{$city}}'"></header-sticky-component>
    <header-component :absolute="true"  :theme="'light'" :city="'{{$city}}'" ></header-component>

{{--    <section class="main-screen">
        <section>
            <div class="main-screen-wrap" >
                <ul>
                    <li class="retargeting-banner">
                        <div class="asset-container">
                            <picture>
                                <source srcset="/build/images/main/mobile/service.jpg, /build/images/main/mobile/service.jpg 2x" media="(max-width: 580px)">
                                <source srcset="/build/images/main/tablet/service.jpg, /build/images/main/tablet/service.jpg 2x" media="(max-width: 1365px)">
                                <source srcset="/build/images/main/desktop/service.jpg, /build/images/main/desktop/service.jpg 2x" media="(min-width: 1366px)">
                                <img class="asset-image" src="/build/images/main/mobile/service.jpg" srcset="/build/images/main/mobile/service.jpg, /build/images/main/mobile/service.jpg 2x" alt="Сервис Брайт Парка" />
                            </picture>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
    </section>--}}
    <div class="container_bg_dark">
        <div class="container">
            <div id="advantages" class="advantages_wrap service_wrap">
                <h2><span class="c_orange">Наши</span> преимущества</h2>
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
        </div>
    </div>
    <div class="container_bg_dark">
        <div class="container">
            <form-component :cities='@json($cities)'
                                     :form_id="'service__form_1'"
                                     :button_text="'Записаться на сервис'"
                                     :form_title="''"
                                     :is_comment='false'
            ></form-component>
        </div>
    </div>
    <div class="container_bg_dark">
        <div class="container">
            <form-retarget-component :cities='@json($cities)'
                                     :form_id="'service__form_2'"
                                     :button_text="'Записаться на сервис'"
                                     :form_title="''"
                                     :is_comment='false'
            ></form-retarget-component>
        </div>
    </div>
    <footer class="block footer container_bg_dark">
        <div class="block-text center mb">
            <h2><span class="c_orange">Брайт Парк </span> всегда на связи</h2>
            <p>У&nbsp;вас есть вопросы? Пообщайтесь со&nbsp;специалистом по&nbsp;телефону&nbsp;<br>
                <a href="tel:{{$cities['active']['phone']}}" id="main__footer_call" class="btn btn btn-primary btn-position green callibri_phone">Позвонить</a></p>
            <p>Брайт парк ближе, чем кажется<br> Проложите маршрут до ближайшего салона</p>
        </div>
        <yandex-map-component :coordinates='@json($data['coordinates'])' :button="true" :btn_class="'green btn-position'"></yandex-map-component>
    </footer>
    {!! html_entity_decode($cities['active']['begin_script']) !!}
    <scroll-event-handler-component></scroll-event-handler-component>
    <event-handler-component></event-handler-component>
@endsection
