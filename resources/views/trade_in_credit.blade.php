@extends('layouts.app2')

@section('content')
    <section id="panel">
        <ul>
            <li>
                <div class="menu"></div>
                <span>Меню</span>
            </li>
            <li>
                <div class="call"></div>
                <span>Звонок</span>
            </li>
            <li>
                <div class="route"></div>
                <span>Маршрут</span>
            </li>
        </ul>
    </section>

    <header>
        <div class="logo-wrap">
            <div class="logo-bright-park"></div>
            <div class="logo-lada"></div>
        </div>
        <div class="lada-line">
            <p id="model-active">Lada Granta</p>
        </div>
    </header>
    <hr>
    <div class="container">
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

            <div>
                <range-slider-component>
                </range-slider-component>
            </div>

            <div class="button-wrapper-row">
                <button class="hollow-button-halfsize hollow-button-recolored">
                    <a href=''>Наличный расчет</a>
                </button>
                <button class="hollow-button-halfsize hollow-button-recolored">
                    В кредит
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
