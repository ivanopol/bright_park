@extends('layouts.app2')

@section('content')
    <tab-bar :cities='@json($cities)' :models='@json($models)' :phone="'{{$cities['active']['phone']}}'"></tab-bar>
    <header-sticky-component :theme="'light'" :city="'{{$city}}'" :button=true :car='@json($data['slider']['slides'])'></header-sticky-component>
    <header-component :line="true" :theme="'light'" :city="'{{$city}}'" :car='@json($data['slider']['slides'])'></header-component>
    <body>
    {!! html_entity_decode($cities['active']['begin_script']) !!}
    </body>
    <div class="">
        <hooper-component :data='@json($data['slider'])'></hooper-component>

        @foreach ($data['blocks'] as $key => $block)
            <info-component :data='@json($block)' :n='@json($key)' :model='@json($data['model_id'])'
                            :type='@json($data['type_id'])'></info-component>
        @endforeach

        @if(count($data['colors']))
            <color-choose-component :colors='@json($data['colors'])'></color-choose-component>
        @endif
        <form-component :cities='@json($cities)'></form-component>
        @if(count($data['reviews']))
            <review-component :reviews='@json($data['reviews'])' :model_name="'{{$data['model_full']}}'"></review-component>
        @endif
        <next-action-component :link="'{{request()->segment(count(request()->segments()))}}'" :cities='@json($cities)'></next-action-component>
        <section class="block block_5">
            <div class="block-text">
                <h2><span class="c_orange">Гарантия</span> 3 года</h2>
                <p>На&nbsp;вашу новенькую LADA {{ $data['model_full'] }} действует расширенная гарантия 3&nbsp;года.</p>
            </div>
            <div class="photo_block container-max">
                <div class="feedback">
                    <picture>
                        <source srcset="{{asset('/build/images/photos/feedback/feedback-desktop.jpg')}}" media="(min-width: 660px)">
                        <img src="{{asset('/build/images/photos/feedback/feedback_04.jpg')}}" alt="">
                    </picture>
                </div>
            </div>
        </section>
        <footer class="block footer">
            <div class="block-text center mb">
                <h2><span class="c_orange">Помощь</span> при покупке</h2>
                <p>У&nbsp;вас есть вопросы? Пообщайтесь со&nbsp;специалистом по&nbsp;телефону&nbsp;<br>+7 (342)
                    214-88-00</p>
                <p>Брайт парк ближе, чем кажется<br> Проложите маршрут до&nbsp;ближайшего салона</p>
            </div>
            <yandex-map-component :coordinates='@json($data['coordinates'])'></yandex-map-component>
        </footer>
        <scroll-event-handler-component></scroll-event-handler-component>
        <event-handler-component></event-handler-component>
    </div>
@endsection
