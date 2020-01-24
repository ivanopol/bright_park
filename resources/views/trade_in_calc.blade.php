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
            <h3>Оцените свой автомобиль</h3>
        </section>
    </div>
@endsection
