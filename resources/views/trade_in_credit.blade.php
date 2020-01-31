@extends('layouts.app2')

@section('content')
    <tab-bar></tab-bar>
    <header-component :line="true" :theme="'light'"></header-component>
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

            <div class="option-text">
                <p>В Bright Park выгодные условия кредитования!</p>
            </div>

            <div class="conditions">
                <ul>
                    <li><span><i class="fas fa-check"></i></span> <span>12 банков-партнеров</span></li>
                    <li><span><i class="fas fa-check"></i></span> <span>Одобрение по кредиту 30 минут</span></li>
                    <li><span><i class="fas fa-check"></i></span> <span>Вероятность одобрения 96%</span></li>
                </ul>
            </div>

            <div class="option-text">
                <p>
                    Первоначальный взнос
                </p>
            </div>

            <div class="buttons_other">
                <div class="item-buttons-other">
                    <a href="#" class="btn btn-secondary">Зачесть мой авто первоначальным взносом</a>
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

            <div class="buttons_other">
                <div class="item-buttons-other">
                    <a href="#" class="btn btn-primary">Закрепить условия</a>
                </div>
            </div>
            <div class="progressbar-wrapper">
                <div class="progressbar-line step2"></div>
                <span class="progressbar-text" >Остался всего 1 шаг до получения выгодных условий</span>
            </div>
        </section>
    </div>
    <script src="https://kit.fontawesome.com/f17735271b.js" crossorigin="anonymous"></script>
@endsection
