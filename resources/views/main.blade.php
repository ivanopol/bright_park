@extends('layouts.app2')

@section('content')
<header-component :line="false" :theme="'light'"></header-component>
<section class="main-screen">
    <main-hooper-component></main-hooper-component>
</section>
<div class="container">
    <div id="advantages" class="advantages_wrap">
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
<section id="models" class="models_wrap">
    <h2>Модели</h2>
    <ul>
        <li>
            <a href="/basic">
                <div class="img_wrap">
                    <img src="build/images/photos/models/granta/granta.png" alt="Granta">
                </div>
                <div class="title">Granta</div>
            </a>
        </li>
        <li>
            <a href="/basic">
                <div class="img_wrap">
                    <img src="build/images/photos/models/vesta/vesta.png" alt="Vesta">
                </div>
                <div class="title">Vesta</div>
            </a>
        </li>
        <li>
            <a href="/basic">
                <div class="img_wrap">
                    <img src="build/images/photos/models/xray/xray.png" alt="Xray">
                </div>
                <div class="title">Xray</div>
            </a>
        </li>
        <li>
            <a href="/basic">
                <div class="img_wrap">
                    <img src="build/images/photos/models/4x4/4x4.png" alt="4x4">
                </div>
                <div class="title">4x4</div>
            </a>
        </li>
        <li>
            <a href="/basic">
                <div class="img_wrap">
                    <img src="build/images/photos/models/largus/largus.png" alt="Largus">
                </div>
                <div class="title">Largus</div>
            </a>
        </li>
    </ul>
</section>
<section id="buttons_other" class="buttons_other">
    <div class="item-buttons-other">
        <a href="/basic" class="btn btn-primary">Записаться на тест-драйв</a>
        <a href="" class="btn btn-secondary">Записаться на сервис</a>
    </div>
</section>
@endsection
