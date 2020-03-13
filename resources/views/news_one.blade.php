@extends('layouts.app2')

@section('content')
    <tab-bar :theme="'dark'" :cities='@json($cities)' :models='@json($models)' :phone="'{{$cities['active']['phone']}}'"></tab-bar>
    <header-sticky-component :theme="'light'" :city="'{{$city}}'"></header-sticky-component>
    <header-component :absolute="true"  :theme="'light'" :city="'{{$city}}'" ></header-component>
    <body>
        {!! html_entity_decode($cities['active']['begin_script']) !!}
        <div class="container p-top-90">
            <div class="news-wrapper">
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
    </body>
@endsection
