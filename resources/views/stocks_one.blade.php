@extends('layouts.app2')

@section('content')
    <tab-bar :theme="'dark'" :cities='@json($cities)' :models='@json($models)'
             :phone="'{{$cities['active']['phone']}}'"></tab-bar>
    <header-sticky-component :theme="'light'" :city="'{{$city}}'" :city_ru="'{{$cities['active']['label']}}'"></header-sticky-component>
    <header-component :absolute="true" :theme="'light'" :city="'{{$city}}'" :city_ru="'{{$cities['active']['label']}}'"></header-component>
    <div class="container">
        {{Breadcrumbs::render("stocks.one", $city, $stocks)}}
    </div>
    <div class="container p-top-90">
        <div class="stocks-wrapper">
            <h1>{{ $stocks->title }}</h1>
            <div class="stocks-one">
                <div class="stocks-one-img">
                    <img src="{{$stocks->preview}}" alt="{{$stocks->text_short}}">
                </div>
                <div class="stocks-one-body">
                    {!! $stocks->text !!}
                </div>
            </div>
        </div>
    </div>

    <?php $url = explode("/", url()->current()); ?>
    @if ($url[count($url)-1] === 'zimnyaya-rezina')

        <section id="models" class="models_wrap">
        <div class="container">
            <h2>Модели</h2>
            <ul>
                @foreach ($models as $model)
                    @if(!empty($model->types_preview[0]))
                        <li>
                            <a id="main__models__{{$model->slug}}" class="event" href="{{ route('model', ['city' => $city, 'car_model' => $model->slug, 'car_type' => $model->types_preview[0]->slug])}}">
                                <div class="img_wrap">
                                    <img src="{{ $model->preview }}" alt="{{ $model->title }}">
                                </div>
                                <div class="title">{{ $model->title }}</div>
                            </a>
                        </li>
                    @endif
                @endforeach
            </ul>
        </div>
    </section>

    <buttons-component :cities='@json($cities)'></buttons-component>

    <div class="container">
        <advantages :dative="'{{$cities['active']['dative']}}'"></advantages>
        <div class="advantages_form">
            <form-buy-component :cities='@json($cities)'
                                :form_id="'main__advantages_'"
                                :button_text="'Отправить'"
                                :form_title="'Оставьте заявку, мы вам перезвоним'"
                                :goal="'about_model'">
            </form-buy-component>
        </div>
    </div>
    @endif

    <footer-component :coordinates='@json($data['coordinates'])'
                      :phone='@json($cities['active']['phone'])'
                      :phone_formatted='@json($cities['active']['phone_format'])'
                      :cities='@json($cities)'
                      :page="'stocks-one'">
    </footer-component>
    {!! html_entity_decode($cities['active']['begin_script']) !!}
    <scroll-event-handler-component></scroll-event-handler-component>
    <event-handler-component></event-handler-component>
@endsection
