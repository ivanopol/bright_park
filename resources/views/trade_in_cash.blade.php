@extends('layouts.app2')

@section('content')
    <header-component :line="true" :theme="'dark'"></header-component>
    <div class="container p-top-90">
        <section>
            <div class="buy-steps-wrapper">
                <div class="buy-step-circle divided">
                    <p class="buy-step-number">1</p>
                    <p class="buy-step-text">
                        Оцените автомобиль
                    </p>
                </div>

                <div class="divider"></div>

                <div class="buy-step-circle-colored divided">
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

            <div class="trade-in-price-text">
                <p>
                    Ваша доплата составит
                </p>
                <span class="special-text-colored-bold">126 000 руб.*</span>
            </div>

            <div class="credit-profit-text">
                <p>
                    В Bright Park выгодные условия покупке за наличные!
                </p> <br/>
                <ul>
                    <li>Личный менеджер</li>
                    <li>Выгода 40 000 руб. при обмене</li>
                    <li>Зимняя резина в подарок <span class="special-text-colored">только до 16.01</span></li>
                </ul>
            </div>

            <div class="button-wrapper-row">
                <div class="button-wrapper-row">
                    <button class="hollow-button hollow-button-recolored">
                        <a>закрепить условия</a>
                    </button>
                </div>
            </div>

            <div style="margin-bottom: 20%">
                <div class="progressbar-wrapper">
                    <div class="progressbar-section-colored">
                        <p class="progressbar-text">Остался всего 1 шаг до получения выгодных условий</p>
                    </div>
                    <div class="progressbar-section-colored">
                    </div>
                    <div class="progressbar-section">
                    </div>
                </div>
            </div>

        </section>
    </div>
@endsection
