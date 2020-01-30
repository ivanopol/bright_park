@extends('layouts.app2')

@section('content')
    <tab-bar></tab-bar>
    <header-component :line="true" :theme="'light'"></header-component>
    <section class="container p-top-90 m-bottom-90">

        <slide-show></slide-show>
            <section>

                <div class="model-price-text">
                    <p>От 421 600 руб.</p>
                </div>

                <div class="credit-price-text">
                    <p>В кредит от 4210 руб. / мес.</p>
                </div>

                <div class="trigger-wrap">
                    <p class="trigger-wrap-text">Осталось <span class="model-count-text">666</span> Granta Лифтбек по спеццене</p>
                </div>

                <div class="model-choose-text">
                    <p>Подберите выгодные условия на LADA Grant LiftBack</p>
                </div>

                <div class="buy-steps-wrapper">
                    <div class="buy-step-block">
                        <div class="buy-step-circle-colored divided">
                            <p class="buy-step-number">1</p>
                        </div>
                        <p class="buy-step-text">Оцените автомобиль</p>
                    </div>

                    <div class="buy-step-block">
                        <div class="buy-step-circle divided">
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

                <div class="option-text">
                    <p>Имеете ли вы автомобиль на обмен?</p>
                </div>

                <section class="buttons_other mt-20">
                    <div class="item-buttons-other">
                        <a href="/trade_in_calc" class="btn btn-primary">Да, оценить мой атомобиль</a>
                        <a href="" class="btn btn-secondary">У меня нет автомобиля</a>
                    </div>
                </section>

                <classified></classified>

                <div class="progressbar-wrapper">
                    <div class="progressbar-line"></div>
                    <span class="progressbar-text">Осталось всего 2 шага до получения выгодных условий</span>
                </div>
         </section>

    </section>
@endsection
