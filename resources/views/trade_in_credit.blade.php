@extends('layouts.app2')

@section('content')
    <tab-bar></tab-bar>
    <header-component :line="true" :theme="'light'"></header-component>
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

            <div class="credit-profit-text">
                <p>
                    В Bright Park выгодные условия кредитования!
                </p> <br/>
                <ul>
                    <li>12 банков-партнеров</li>
                    <li>Одобрение по кредиту 30 минут</li>
                    <li>Вероятность одобрения 96%</li>
                </ul>
                <br/>
                <p>
                    Первоначальный взнос
                </p>
                <div class="button-wrapper-row">
                    <button class="hollow-button hollow-button-recolored">
                        <a>Зачесть мой авто первоначальным взносом</a>
                    </button>
                </div>
            </div>

            <div class="range-slider-wrapper">
                <range-slider-component>
                </range-slider-component>
            </div>

            <div class="disabled-input">
                <input readonly value="126 000"/> руб.
            </div>

            <div class="credit-profit-text">
                <p>Срок в месяцах</p>
            </div>

            <div class="range-slider-wrapper">
                <range-slider-component-period>
                </range-slider-component-period>
            </div>

            <div class="disabled-input">
                <input readonly value="12"/> мес.
            </div>

            <div class="radio-buttons-group">
                <div >
                    <input type="radio" name="program"> Обычная программа 19 700 руб./мес
                </div>
                <div>
                    <input type="radio" name="program"> Программа LADA Finance 12 700 руб./мес<br>
                </div>
                <div>
                    <input type="radio" name="program"> Специальный рассчет 11 700 руб./мес<br>

                </div>
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
