@extends('layouts.app2')

@section('content')
    <tab-bar :theme="'dark'" :cities='@json($cities)' :models='@json($models)'
             :phone="'{{$cities['active']['phone']}}'"></tab-bar>
    <header-sticky-component :theme="'light'" :city="'{{$city}}'"></header-sticky-component>
    <header-component :absolute="true" :theme="'light'" :city="'{{$city}}'"></header-component>
    <body>
    <div class="container p-top-90">
        <div class="stocks-wrapper">
            <h1>{{ $stocks->title }}</h1>
            <div class="stocks-one">
                <div class="stocks-one-img">
                    <img src="{{$stocks->preview}}" alt="{{$stocks->text_short}}">
                </div>
                <div class="stocks-one-body">
                    {!! $stocks->text !!}
                </div>
            </div>
        </div>
    </div>
    <footer class="block footer">
        <div class="block-text center mb">
            <h2><span class="c_orange">Брайт Парк </span> всегда на связи</h2>
            <p>У&nbsp;вас есть вопросы? Пообщайтесь со&nbsp;специалистом по&nbsp;телефону&nbsp;<br> <a href="tel:{{$cities['active']['phone']}}" class="callibri_phone">{{ $cities['active']['phone_format'] }}</a></p>
            <p>Брайт парк ближе, чем кажется<br> Проложите маршрут до&nbsp;ближайшего салона</p>
        </div>
        <yandex-map-component :coordinates='@json($data['coordinates'])'></yandex-map-component>
    </footer>
    {!! html_entity_decode($cities['active']['begin_script']) !!}
    <scroll-event-handler-component></scroll-event-handler-component>
    <event-handler-component></event-handler-component>
    </body>
@endsection
