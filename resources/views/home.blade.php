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
                                <li><a href="{{ url('/basic_version') }}">Базовая версия</a></li>
                                <li><a href="{{ url('/second_version') }}">Версия №2</a></li>
                            </ul>


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
