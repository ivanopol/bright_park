@extends('layouts.app2')

@section('content')
<header-component :line="false" :theme="'light'"></header-component>
<section class="main-screen">
    <main-hooper-component></main-hooper-component>
</section>
<div class="container">
    <div class="advantages">
        <h1>Брайт Парк</h1>
        <p>Мы - федеральный дилер LADA, работающий в Москве и ещё 5 регионах с 2008 года.</p>
        <ul>
            <li>
                <div class="advantage">
                    <span class="value">12</span>
                    <span class="text">банков-﻿партнеров</span>
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
@endsection
