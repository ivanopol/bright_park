@extends('layouts.app2')

@section('content')
    <tab-bar :cities='@json($cities)' :models='@json($models)' :phone="'{{$cities['active']['phone']}}'"></tab-bar>
    <header-sticky-model :theme="'light'" :city="'{{$city}}'" :button=true
                             :car='@json($data['slider']['slides'])'></header-sticky-model>
    <header-component :line="true" :theme="'light'" :city="'{{$city}}'"
                      :car='@json($data['slider']['slides'])'></header-component>
    <body>
    <div class="">
        <hooper-component :data='@json($data['slider'])'></hooper-component>

        @foreach ($data['blocks'] as $key => $block)
            <info-component :block='@json($block)' :n='@json($key)' :model='@json($data['model_id'])' :type='@json($data['type_id'])' :data='@json($data)'></info-component>
            @if ($key === 1)
                <form-buy-component :cities='@json($cities)' :form_id="'model__form_1'"
                     :button_text="'Отправить'" :form_title="'<span class=\'c_orange\'>Узнайте</span> о модели подробнее'"></form-buy-component>
            @endif
        @endforeach

        @if(count($data['colors']))
            <color-choose-component :colors='@json($data['colors'])'></color-choose-component>
        @endif
        <form-component :cities='@json($cities)' :form_id="'model__form_2'" :form_title="'Расширенный тест-драйв в Брайт парке'"></form-component>
        @if(count($data['reviews']))
            <review-component :reviews='@json($data['reviews'])'
                              :model_name="'{{$data['model_full']}}'"></review-component>
        @endif
        <next-action-component :link="'{{request()->segment(count(request()->segments()))}}'"
                               :cities='@json($cities)'></next-action-component>
        <section class="block block_5">
            <div class="block-text">
                <h2><span class="c_orange">Гарантия</span> 3 года</h2>
                <p>На&nbsp;вашу новенькую LADA {{ $data['model_full'] }} действует расширенная гарантия 3&nbsp;года.</p>
            </div>
            <div class="photo_block container-max">
                <div class="feedback">
                    <picture>
                        <source srcset="{{asset('/build/images/photos/feedback/feedback-desktop.jpg')}}"
                                media="(min-width: 660px)">
                        <img src="{{asset('/build/images/photos/feedback/feedback_04.jpg')}}" alt="">
                    </picture>
                </div>
            </div>
        </section>
        <footer class="block footer">
            <div class="block-text center mb">
                <h2><span class="c_orange">Брайт Парк </span> всегда на связи</h2>
                <p>У&nbsp;вас есть вопросы? Пообщайтесь со&nbsp;специалистом по&nbsp;телефону&nbsp;<br> <a href="tel:{{$cities['active']['phone']}}" id="'model__footer_call'" class="btn btn btn-primary btn-position green callibri_phone">Позвонить</a></p>
                <p>Брайт парк ближе, чем кажется<br> </p>
            </div>
            <yandex-map-component :coordinates='@json($data['coordinates'])'></yandex-map-component>
        </footer>
    </div>
    {!! html_entity_decode($cities['active']['begin_script']) !!}
    <scroll-event-handler-component></scroll-event-handler-component>
    <event-handler-component></event-handler-component>
    </body>
@endsection
