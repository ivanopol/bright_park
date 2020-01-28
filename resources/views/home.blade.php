@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Страницы</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <h3>Модели</h3>
                            <ul>
                                <li><a href="{{ url('/main') }}">Главная страница</a></li>
                                <li><a href="{{ url('/basic') }}">Базовая версия</a></li>
                                <li><a href="{{ url('/model_details') }}">Сбытовая шаг 1</a></li>
                                <li><a href="{{ url('/trade_in_calc') }}">Сбытовая шаг 2</a></li>
                                <li><a href="{{ url('/trade_in_cash') }}">Сбытовая шаг 3.1</a></li>
                                <li><a href="{{ url('/trade_in_credit') }}">Сбытовая шаг 3.2</a></li>
                            </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
