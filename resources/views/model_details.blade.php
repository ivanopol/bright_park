@extends('layouts.app2')

@section('content')
    <top-bar></top-bar>
    <header-component :line="true" :theme="'light'"></header-component>
    <div class="container p-top-90">
        <section>
            <div>
                <img width="100%" src="build/images/photos/models/granta/full/front-left.jpg">
            </div>
            <div class="car-pictures-wrapper">
                <div>
                    <img
                        src="build/images/photos/models/granta/preview/1.jpg">
                </div>
                <div>
                    <img
                        src="build/images/photos/models/granta/preview/2.jpg">
                </div>
                <div>
                    <img
                        src="build/images/photos/models/granta/preview/3.jpg">
                </div>
                <div>
                    <img
                        src="build/images/photos/models/granta/preview/4.jpg">
                </div>
                <div>
                    <img
                        src="build/images/photos/models/granta/preview/5.jpg">
                </div>
            </div>
        </section>
        <section>
            <div class="model-price-text">
                <p>
                    От 421 600 руб.
                </p>
            </div>

            <div class="credit-price-text">
                <p>
                    В кредит от 4210 руб. / мес.
                </p>
            </div>

            <div class="trigger-wrap">
                <p class="trigger-wrap-text">
                    Осталось <span class="model-count-text">666</span> Granta Лифтбек по спеццене
                </p>
            </div>

            <div class="model-choose-text">
                <p>
                    Подберите выгодные условия на LADA Grant LiftBack
                </p>
            </div>

            <div class="buy-steps-wrapper">
                <div class="buy-step-circle-colored divided">
                    <p class="buy-step-number">1</p>
                    <p class="buy-step-text">
                        Оцените автомобиль
                    </p>
                </div>

                <div class="divider"></div>

                <div class="buy-step-circle divided">
                    <p class="buy-step-number">2</p>
                    <p class="buy-step-text">
                        Рассчитайте платеж
                    </p>
                </div>

                <div class="divider"></div>

                <div class="buy-step-circle divided">
                    <p class="buy-step-number">3</p>
                    <p class="buy-step-text">
                        Заполните форму
                    </p>
                </div>
            </div>

            <div class="option-text">
                <p>
                    Имеете ли вы автомобиль на обмен?
                </p>
            </div>

            <div class="button-wrapper">
                <button class="hollow-button hollow-button-recolored">
                    <a href='/trade_in_calc'>ДА, ОЦЕНИТЬ МОЙ АВТОМОБИЛЬ</a>
                </button>
                <button class="hollow-button hollow-button-recolored">
                    У МЕНЯ НЕТ АВТОМОБИЛЯ
                </button>
            </div>


            <div class="progressbar-wrapper">
                <div class="progressbar-section-colored">
                    <p class="progressbar-text">Осталось всего 2 шага до получения выгодных условий</p>
                </div>
                <div class="progressbar-section">
                </div>
                <div class="progressbar-section">
                </div>
            </div>

        </section>
    </div>
@endsection
