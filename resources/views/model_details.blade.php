@extends('layouts.app2')

@section('content')
    <tab-bar :cities='@json($cities)' :models='@json($models)'></tab-bar>
    <header-sticky-component :theme="'light'" :city="'{{$city}}'"></header-sticky-component>
    <header-component :line="true" :theme="'light'" :city="'{{$city}}'"></header-component>
    <section class="container m-bottom-120">
        <slide-show></slide-show>
        <section>
            <div class="model-price-text">
                <p>От 421 600 руб.</p>
            </div>

            <div class="credit-price-text">
                <p>В кредит от 4210 руб. / мес.</p>
            </div>

            <div class="trigger-wrap">
                <p class="trigger-wrap-text">Осталось <span class="model-count-text">333</span> {{$car_model->title}} {{$car_type->title_ru}} по спеццене</p>
            </div>

            <steps :brands='@json($brands)' :car_model='@json($car_model)' :car_type='@json($car_type)'></steps>
        </section>
    </section>
@endsection
