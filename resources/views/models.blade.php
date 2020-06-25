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
            <div class="container" itemscope itemtype="http://schema.org/Product">
                <h1>LADA {{$data['carcasses'][0]->title}} от официального дилера в {{$cities['active']['dative']}}</h1>
                <ul class="carcasses-ul">
                    @foreach ($data['carcasses'][0]->carcasses as $carcass)
                        <li>
                            <div class="carcasses-list">
                                <a href="{{ route('model', ['city' => $city, 'car_model' => $data['carcasses'][0]->slug, 'car_type' => $carcass->slug ]) }}">
                                    <div class="carcasses-list-img">
                                        <img itemprop="image" src="{{$carcass->pivot->image}}" alt="{{$data['carcasses'][0]->title . ' ' . $carcass->title_ru}}">
                                    </div>
                                    <div class="carcasses-list-description" itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                        <div class="carcasses-list-title">
                                            <span class="carcasses-list-title-el" itemprop="name">{{$data['carcasses'][0]->title . ' ' . $carcass->title_ru}}</span>
                                            <span itemprop="description" class="carcasses-list-title-slogan">{{$carcass->pivot->slogan}}</span>
                                        </div>
                                        <div class="carcasses-list-prices" >
                                            <span itemprop="price" class="carcasses-list-prices-new">от <span>{{ number_format($carcass->pivot->special_price, 0, ',', ' ') }}</span> <span itemprop="priceCurrency" content="RUB">р.</span></span>
                                             <span class="carcasses-list-prices-old">от <span>{{ number_format($carcass->pivot->price, 0, ',', ' ') }}</span> р.</span>
                                        </div>
                                        <div class="carcasses-list-button">
                                            <a itemprop="availability" href="{{ route('model', ['city' => $city, 'car_model' => $data['carcasses'][0]->slug, 'car_type' => $carcass->slug ]) }}" class="btn btn-primary btn-position green">Подробнее</a>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </li>
                    @endforeach
                </ul>
                <div class="text-after">{!! $data['carcasses'][0]->description !!}</div>
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
