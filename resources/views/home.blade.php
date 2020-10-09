@extends('layouts.app2')

@section('content')
    <tab-bar :theme="'dark'" :cities='@json($cities)' :models='@json($models)' :phone="'{{$cities['active']['phone']}}'"></tab-bar>
    <header-sticky-component :theme="'light'" :city="'{{$city}}'"></header-sticky-component>
    <header-component :absolute="true"  :theme="'light'" :city="'{{$city}}'" ></header-component>
    <section class="main-screen">
        <main-hooper-component :city="'{{$city}}'"></main-hooper-component>
    </section>
    <plate :bold='true' :city="'{{$city}}'" :text="'Внимание! Склад пополнился! Отдаем с&nbsp;максимальной выгодой!'"></plate>
    <div class="event-scroll">
        <div class="container">
            <advantages :dative="'{{$cities['active']['dative']}}'"></advantages>
        </div>

        <buttons-component :cities='@json($cities)'></buttons-component>

        <section id="models" class="models_wrap">
            <div class="container">
                <h2>Модели</h2>
                <ul>
                    @foreach ($models as $model)
                        @if(!empty($model->types_preview[0]))
                        <li>
                            <a id="main__models__{{$model->slug}}" class="event" href="{{ route('model', ['city' => $city, 'car_model' => $model->slug, 'car_type' => $model->types_preview[0]->slug])}}">
                                <div class="img_wrap">
                                    <img src="{{ $model->preview }}" alt="{{ $model->title }}">
                                </div>
                                <div class="title">{{ $model->title }}</div>
                            </a>
                        </li>
                        @endif
                    @endforeach
                </ul>
            </div>
        </section>

        <banks-component :cities='@json($cities)'></banks-component>

        <footer-component :coordinates='@json($data['coordinates'])'
                          :phone='@json($cities['active']['phone'])'
                          :phone_formatted='@json($cities['active']['phone_format'])'
                          :cities='@json($cities)'
                          :page="'main'">
        </footer-component>
        <event-handler-component></event-handler-component>
        <scroll-event-handler-component></scroll-event-handler-component>
        {!! html_entity_decode($cities['active']['begin_script']) !!}
    </div>
@endsection
