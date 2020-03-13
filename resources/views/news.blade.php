@extends('layouts.app2')

@section('content')
    <tab-bar :theme="'dark'" :cities='@json($cities)' :models='@json($models)' :phone="'{{$cities['active']['phone']}}'"></tab-bar>
    <header-sticky-component :theme="'light'" :city="'{{$city}}'"></header-sticky-component>
    <header-component :absolute="true"  :theme="'light'" :city="'{{$city}}'" ></header-component>
    <body>
        {!! html_entity_decode($cities['active']['begin_script']) !!}
        <div class="container p-top-90">
            <div class="news-wrapper">
                <h1>Новости Брайт Парка в {{ $city_info->city_dative  }} </h1>
                @foreach($news as $new)
                    <div class="new-row">
                        <a href="{{ route('news.one', ['city' => $city_info->alias, 'news_title' => $new->slug]) }}" class="new-title">{{$new->title}}</a>
                        <div class="new-content-wrap">
                            <div class="new-img">
                                <a href="{{ route('news.one', ['city' => $city_info->alias, 'news_title' => $new->slug]) }}">
                                    <img  src="{{$new->preview}}" alt="{{$new->text_short}}">
                                </a>
                            </div>
                            <div class="new-text-wrap">
                                <div class="new-text">{!! $new->text_short !!}</div>
                                <div class="new-button">
                                    <a href="{{ route('news.one', ['city' => $city_info->alias, 'news_title' => $new->slug]) }}" class="btn btn-primary">Читать</a>
                                </div>
                            </div>
                        </div>

                    </div>
                @endforeach
            </div>
        </div>
    </body>
@endsection
