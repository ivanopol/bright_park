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
                <div class="trigger-wrap"><p><span class="c_orange big_value">17</span> автомобилей с ПТС</p></div>
            </div>
        </div>
        <div class="block">
            <div class="block-text">
                <h2><span class="c_orange">Эти акции</span> уже закончились</h2>
                <p class="allocated">Выгода 80&nbsp;000&nbsp;руб.&nbsp;по&nbsp;программам Трейд-ин и&nbsp;LADA Finance</p>
            </div>
            <div class="retarget-trigger-image">
                <img src="/build/images/retarget/retarget-trigger.jpg" alt="Вы не успели">
            </div>
        </div>
    </div>

    </body>
@endsection
