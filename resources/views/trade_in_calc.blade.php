@extends('layouts.app2')

@section('content')
    <header-component :line="true" :theme="'dark'"></header-component>
    <div class="container">
        <section>
            <h3>Оцените свой автомобиль</h3>

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
