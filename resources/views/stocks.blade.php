@extends('layouts.app2')

@section('content')
    <tab-bar :theme="'dark'" :cities='@json($cities)' :models='@json($models)' :phone="'{{$cities['active']['phone']}}'"></tab-bar>
    <header-sticky-component :theme="'light'" :city="'{{$city}}'"></header-sticky-component>
    <header-component :absolute="true"  :theme="'light'" :city="'{{$city}}'" ></header-component>
    <body>
        {!! html_entity_decode($cities['active']['begin_script']) !!}
        <div class="container p-top-90">
            <div class="stocks">
                <h1>Акции Брайт Парка в {{ $city_info->city_dative  }} </h1>
                @foreach($stocks as $stock)
                    <div class="stocks-row">
                        <a href="{{ route('stocks.one', ['city' => $city_info->alias, 'stocks_title' => $stock->slug]) }}" class="stocks-title">{{$stock->title}}</a>
                        <div class="stocks-content">
                            <div class="stocks-img">
                                <a href="{{ route('stocks.one', ['city' => $city_info->alias, 'stocks_title' => $stock->slug]) }}">
                                    <img  src="{{$stock->preview}}" alt="{{$stock->text_short}}">
                                </a>
                            </div>
                            <div class="stocks-text-wrap">
                                <div class="stocks-text">{!! $stock->text_short !!}</div>
                                <div class="stocks-button">
                                    <a href="{{ route('stocks.one', ['city' => $city_info->alias, 'stocks_title' => $stock->slug]) }}" class="btn btn-primary">Читать</a>
                                </div>
                            </div>
                        </div>

                    </div>
                @endforeach
            </div>
        </div>
        <footer class="block footer">
            <div class="block-text center mb">
                <h2><span class="c_orange">Помощь</span> при покупке</h2>
                <p>У&nbsp;вас есть вопросы? Пообщайтесь со&nbsp;специалистом по&nbsp;телефону&nbsp;<br>{{ $cities['active']['phone'] }}</p>
                <p>Брайт парк ближе, чем кажется<br> Проложите маршрут до&nbsp;ближайшего салона</p>
            </div>
            <yandex-map-component :coordinates='@json($data['coordinates'])'></yandex-map-component>
        </footer>
    </body>
@endsection
