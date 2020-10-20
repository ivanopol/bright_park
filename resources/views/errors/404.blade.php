@extends('layouts.error')

@section('content')
    <tab-bar :theme="'dark'" :cities='@json($cities)' :models='@json($models)' :phone="'{{$cities['active']['phone']}}'"></tab-bar>
    <header-sticky-component :theme="'light'" :city="'{{$city}}'" :city_ru="'{{$cities['active']['label']}}'"></header-sticky-component>
    <header-component :absolute="true"  :theme="'light'" :city="'{{$city}}'" :city_ru="'{{$cities['active']['label']}}'" ></header-component>
    <div class="not-found">
        <div class="img-wrapper">
            <span>Упс!</span>
            <img src="/build/images/404.svg" alt="Ошибка 404, страница не найдена">
        </div>
        <div class="message-wrapper">
            <div class="message-text">Извините,<br> страница не найдена.</div>
            <a id="404__button__main" href="/{{$city}}" class="btn btn-primary btn-position white event">Перейти на главную страницу</a>
        </div>
    </div>
    <footer-component :coordinates='@json($data['coordinates'])'
                      :phone='@json($cities['active']['phone'])'
                      :phone_formatted='@json($cities['active']['phone_format'])'
                      :cities='@json($cities)'
                      :page="'404'"
                      :with_map='false'>
    </footer-component>
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
@endsection
