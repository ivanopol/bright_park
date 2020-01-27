@extends('layouts.app2')

@section('content')
    <header-component :line="true" :theme="'dark'"></header-component>
    <div class="container">
        <section>
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
            <div class="dropdown-group-title">Оцените свой автомобиль</div>
            <div class="container dropdown-group">
                <select class="dropdown">
                    <option selected="selected">Марка</option>
                </select>
                <select>
                    <option selected="selected">Модель</option>
                </select>
                <select>
                    <option selected="selected">Год выпуска</option>
                </select>
                <select>
                    <option selected="selected">Комплектация</option>
                </select>
                <select>
                    <option selected="selected">Пробег</option>
                </select>
            </div>

            <div class="trigger-wrap">
                <p class="trigger-wrap-text">
                    Рыночная оценка <span class="model-count-text">666 руб</span> <br/>
                    Оценка Bright Park <span class="model-count-text">666 руб</span>
                </p>
            </div>

            <div class="model-choose-text">
                <p>
                    Предложение действует до 16 января
                </p>
            </div>

            <div class="button-wrapper-row">
                <button class="hollow-button-halfsize hollow-button-recolored">
                    <a href='/trade_in_cash'>Наличный расчет</a>
                </button>
                <button class="hollow-button-halfsize hollow-button-recolored">
                    <a href="/trade_in_credit">В кредит</a>
                </button>
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
