@extends('layouts.app2')

@section('content')
    <tab-bar :theme="'dark'" :cities='@json($cities)' :models='@json($models)' :phone="'{{$cities['active']['phone']}}'"></tab-bar>
    <header-sticky-component :theme="'light'" :city="'{{$city}}'"></header-sticky-component>
    <header-component :absolute="true"  :theme="'light'" :city="'{{$city}}'" ></header-component>
    <body>
        <div class="container p-top-90">
            <div class="news">
                <h1>{{ $news->title }}</h1>
                <div class="news-one">
                    <div class="news-one-img">
                        <img  src="{{$news->preview}}" alt="{{$news->text_short}}">
                    </div>
                    <div class="news-one-body">
                        {!! $news->text !!}
                    </div>
                </div>
            </div>
        </div>
        <footer class="block footer">
            <div class="block-text center mb">
                <h2><span class="c_orange">Помощь</span> при покупке</h2>
                <p>У&nbsp;вас есть вопросы? Пообщайтесь со&nbsp;специалистом по&nbsp;телефону&nbsp;<br><span class="callibri_phone">{{ $cities['active']['phone_format'] }}</span></p>
                <p>Брайт парк ближе, чем кажется<br> Проложите маршрут до&nbsp;ближайшего салона</p>
            </div>
            <yandex-map-component :coordinates='@json($data['coordinates'])'></yandex-map-component>
        </footer>
        {!! html_entity_decode($cities['active']['begin_script']) !!}
    </body>
@endsection
