@extends('layouts.app2')

@section('content')
    <tab-bar :theme="'dark'" :cities='@json($cities)' :models='@json($models)' :phone="'{{$cities['active']['phone']}}'"></tab-bar>
    <header-sticky-component :theme="'light'" :city="'{{$city}}'"></header-sticky-component>
    <header-component :absolute="true"  :theme="'light'" :city="'{{$city}}'" ></header-component>
    <div class="container">
        {{Breadcrumbs::render("models", $city, $car_model)}}
    </div>
    <div class="">
        <section id="carcasses" class="carcasses_wrap">
            <div class="container">
                <h1>LADA Granta от официального дилера в Перми</h1>
                <ul>
                    @foreach ($data['carcasses'][0]->carcasses as $carcass)
                        <li>
                          <img src="{{$carcass->pivot->image}}" alt="{{$data['carcasses'][0]->title . ' ' . $carcass->title_ru}}">
                        </li>
{{--                        <li>
                            <a id="models__list__{{$carcass->slug}}" class="event" href="{{ route('model', ['city' => $city, 'car_model' => $model->slug, 'car_type' => $model->types_preview[0]->slug])}}">
                                <div class="img_wrap">
                                    <img src="{{ $model->preview }}" alt="{{ $model->title }}">
                                </div>
                                <div class="title">{{ $model->title }}</div>
                            </a>
                        </li>--}}
                    @endforeach
                </ul>
            </div>
        </section>
        <footer-component :coordinates='@json($data['coordinates'])'
                          :phone='@json($cities['active']['phone'])'
                          :phone_formatted='@json($cities['active']['phone_format'])'
                          :cities='@json($cities)'>
        </footer-component>
    </div>
    {!! html_entity_decode($cities['active']['begin_script']) !!}
    <scroll-event-handler-component></scroll-event-handler-component>
    <event-handler-component></event-handler-component>
@endsection
