@extends('layouts.app2')

@section('content')
    <tab-bar :theme="'dark'" :cities='@json($cities)' :models='@json($models)' :phone="'{{$cities['active']['phone']}}'"></tab-bar>
    <header-sticky-component :theme="'light'" :city="'{{$city}}'"></header-sticky-component>
    <header-component :absolute="true"  :theme="'light'" :city="'{{$city}}'" ></header-component>
    <section class="main-screen">
        <retargeting-component :city="'{{$city}}'"></retargeting-component>
    </section>
    <body>
    <div class="container">
        <div id="advantages" class="advantages_wrap">
            <h1><span class="c_orange">Преимущества</span> покупки сейчас</h1>
            <ul>
                <li>
                    <div class="advantage">
                        <span class="value"></span>
                        <span class="text">Дорога до салона за наш счет</span>
                    </div>
                </li>
                <li>
                    <div class="advantage">
                        <span class="value"></span>
                        <span class="text">Подберем выгодную ставку до 3%</span>
                    </div>
                </li>
                <li>
                    <div class="advantage">
                        <span class="value"></span>
                        <span class="text">КАСКО в подарок</span>
                    </div>
                </li>
                <li>
                    <div class="advantage">
                        <span class="value"></span>
                        <span class="text">Зимняя резина в комплекте</span>
                    </div>
                </li>
            </ul>
        </div>
    </div>

    </body>
@endsection
