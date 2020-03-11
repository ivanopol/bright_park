@extends('layouts.app2')

@section('content')
    <tab-bar :theme="'dark'" :cities='@json($cities)' :models='@json($models)' :phone="'{{$cities['active']['phone']}}'"></tab-bar>
    <header-sticky-component :theme="'light'" :city="'{{$city}}'"></header-sticky-component>
    <header-component :absolute="true"  :theme="'light'" :city="'{{$city}}'" ></header-component>
    <section class="main-screen">
        <retargeting-component :city="'{{$city}}'" :offer='@json($offer)'></retargeting-component>
    </section>
    <body>
    <div class="container">
        <div id="advantages" class="advantages_wrap retargeting_wrap">
            <h1><span class="c_orange">Преимущества</span> покупки сейчас</h1>
            <ul>
                <li>
                    <div class="advantage">
                        <span class="icon"><img src="/build/images/icons/icon-road.svg" alt="Брайт Парк: дорога до салона за наш счет"></span>
                        <span class="text">Дорога до салона за наш счет</span>
                    </div>
                </li>
                <li>
                    <div class="advantage">
                        <span class="icon"><img src="/build/images/icons/icon-percent.svg" alt="Брайт Парк: подберем выгодную ставку до 3%"></span>
                        <span class="text">Подберем выгодную ставку до 3%</span>
                    </div>
                </li>
                <li>
                    <div class="advantage">
                        <span class="icon"><img src="/build/images/icons/icon-gift.svg" alt="Брайт Парк: КАСКО в подарок"></span>
                        <span class="text">КАСКО в подарок</span>
                    </div>
                </li>
                <li>
                    <div class="advantage">
                        <span class="icon"><img src="/build/images/icons/icon-complect.svg" alt="Брайт Парк: зимняя резина в комплекте"></span>
                        <span class="text">Зимняя резина в комплекте</span>
                    </div>
                </li>
            </ul>
            <div class="retarget-trigger">
                <h3>Осталось по акции</h3>
                <div class="trigger-wrap"><p><span class="c_orange big_value">{{$offer->count}}</span> автомобилей с ПТС</p></div>
            </div>
        </div>
        <div class="block">
            <div class="block-text">
                <h2><span class="c_orange">Эти акции</span> уже закончились</h2>
                <p class="allocated">Выгода 80&nbsp;000&nbsp;руб.&nbsp;по&nbsp;программам Трейд-ин и&nbsp;LADA Finance</p>
            </div>
            <div class="retarget-trigger-image">
                <picture>
                    <source srcset="/build/images/retarget/retarget-trigger.jpg, /build/images/retarget/retarget-trigger.jpg 2x" media="(max-width: 579px)">
                    <source srcset="/build/images/retarget/retarget-trigger-desktop.jpg, /build/images/retarget/retarget-trigger-desktop.jpg 2x" media="(min-width: 580px)">
                    <img src="/build/images/retarget/retarget-trigger.jpg"
                         srcset="/build/images/retarget/retarget-trigger.jpg, /build/images/retarget/retarget-trigger.jpg 2x" alt="Вы не успели" />
                </picture>
                <div class="retarget-message">
                    <h3>Вы не успели!</h3>
                    <p><span>ваша модель популярна, эта акция закончилась</span> <span>22.01.2020</span></p>
                </div>
            </div>
        </div>
        <form-retarget-component :cities='@json($cities)'></form-retarget-component>
        <modal-retarget-component></modal-retarget-component>
    </div>

    </body>
@endsection
