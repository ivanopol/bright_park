@extends('layouts.app2')

@section('content')
    <tab-bar :cities='@json($cities)'></tab-bar>
    <header-component :line="true" :theme="'light'" :city="'{{$city}}'"></header-component>
    <script>{{$cities['active']['begin_script']}}</script>
    <div class="container p-top-90 m-bottom-120">
        <section>
            <div class="buy-steps-wrapper">
                <div class="buy-step-block">
                    <div class="buy-step-circle-colored divided">
                        <p class="buy-step-number">1</p>
                    </div>
                    <p class="buy-step-text">Оцените автомобиль</p>
                </div>

                <div class="buy-step-block">
                    <div class="buy-step-circle-colored divided">
                        <p class="buy-step-number">2</p>
                    </div>
                    <p class="buy-step-text">Рассчитайте платеж</p>
                </div>

                <div class="buy-step-block">
                    <div class="buy-step-circle divided">
                        <p class="buy-step-number">3</p>
                    </div>
                    <p class="buy-step-text">Заполните форму</p>
                </div>
            </div>

            <div>
                <range-slider-component :car='@json($data['car'])'></range-slider-component>
            </div>

            <div class="progressbar-wrapper">
                <div class="progressbar-line step2"></div>
                <span class="progressbar-text" >Остался всего 1 шаг до получения выгодных условий</span>
            </div>
            <scroll-event-handler-component></scroll-event-handler-component>
            <event-handler-component></event-handler-component>
        </section>
        {!! html_entity_decode($cities['active']['begin_script']) !!}
    </div>
@endsection
