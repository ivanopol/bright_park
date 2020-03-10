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
            <h1>Брайт Парк</h1>
            <p>Мы - федеральный дилер LADA, работающий в Москве и ещё 5 регионах с 2008 года.</p>
            <ul>
                <li>
                    <div class="advantage">
                        <span class="value">12</span>
                        <span class="text">банков-<br>﻿партнеров</span>
                    </div>
                </li>
                <li>
                    <div class="advantage">
                        <span class="value">15 мин.</span>
                        <span class="text">на одобрение по кредиту</span>
                    </div>
                </li>
                <li>
                    <div class="advantage">
                        <span class="value">1 час</span>
                        <span class="text">обмен авто на новенькую LADA</span>
                    </div>
                </li>
                <li>
                    <div class="advantage">
                        <span class="value">500</span>
                        <span class="text">авто с ПТС в наличии</span>
                    </div>
                </li>
            </ul>
        </div>
    </div>

    </body>
@endsection
