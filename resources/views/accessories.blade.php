@extends('layouts.app2')

@section('content')
    <tab-bar :theme="'dark'" :cities='@json($cities)' :models='@json($models)' :phone="'{{$cities['active']['phone']}}'"></tab-bar>
    <header-sticky-component :theme="'light'" :city="'{{$city}}'"></header-sticky-component>
    <header-component :absolute="true"  :theme="'light'" :city="'{{$city}}'" ></header-component>
    <div class="container">
        {{Breadcrumbs::render("accessories", $city)}}
    </div>
    <div class="">
        <section id="accessories" class="accessories_wrap">
            <div class="container" itemscope itemtype="http://schema.org/Product">
                <h1>H1</h1>
                <ul class="accessories-ul">

                </ul>
            </div>
        </section>
        <footer-component :coordinates='@json($data['coordinates'])'
                          :phone='@json($cities['active']['phone'])'
                          :phone_formatted='@json($cities['active']['phone_format'])'
                          :cities='@json($cities)'
                          :page="'accessories'">
        </footer-component>
    </div>
    {!! html_entity_decode($cities['active']['begin_script']) !!}
    <scroll-event-handler-component></scroll-event-handler-component>
    <event-handler-component></event-handler-component>
@endsection
