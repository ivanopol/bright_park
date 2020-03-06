@extends('layouts.app2')

@section('content')
    <tab-bar :cities='@json($cities)' :models='@json($models)'></tab-bar>
    <header-sticky-component :theme="'light'" :city="'{{$city}}'" :button=true :car='@json($data['slider']['slides'])'></header-sticky-component>
    <header-component :line="true" :theme="'light'" :city="'{{$city}}'" :car='@json($data['slider']['slides'])'></header-component>
    <body>
    <script>{{$cities['active']['begin_script']}}</script>
    </body>
    <div class="container-max">
        <hooper-component :data='@json($data['slider'])'></hooper-component>

        @foreach ($data['blocks'] as $key => $block)
            <info-component :data='@json($block)' :n='@json($key)' :model='@json($data['model_id'])'
                            :type='@json($data['type_id'])'></info-component>
        @endforeach

        @if(count($data['colors']))
            <color-choose-component :colors='@json($data['colors'])'></color-choose-component>
        @endif
        <form-component :cities='@json($cities)'></form-component>
        @if(count($data['reviews']))
            <review-component :reviews='@json($data['reviews'])' :model_name="'{{$data['model_full']}}'"></review-component>
        @endif
        <section class="block next_action">
            <div class="block-text">
                <h2><span class="c_orange">Ваше</span> следующее действие</h2>
            </div>
            <ul>
                <li>
                    <a class="btn" href="#" onclick="return false;">Записаться на тест-драйв</a>
                </li>
                <li>
                    <a class="btn" href="{{request()->segment(count(request()->segments()))}}/model_details">Рассчитать
                        кредит</a>
                </li>
                <li>
                    <a class="btn" href="{{request()->segment(count(request()->segments()))}}/model_details">Оценить
                        свой автомобиль</a>
                </li>
                <li>
                    <a class="btn" href="#" onclick="return false;">Получить спецпредложение</a>
                </li>
            </ul>
        </section>
        <section class="block block_5">
            <div class="block-text">
                <h2><span class="c_orange">Гарантия</span> 3 года</h2>
                <p>На&nbsp;вашу новенькую Лада {{ $data['model_full'] }} действует расширенная гарантия 3&nbsp;года.</p>
            </div>
            <div class="photo_block">
                <div class="feedback">
                    <img src="{{asset('/build/images/photos/feedback/feedback_04.jpg')}}" alt="">
                </div>
            </div>
        </section>
        <footer class="block footer">
            <div class="block-text center mb">
                <h2><span class="c_orange">Помощь</span> при покупке</h2>
                <p>У&nbsp;вас есть вопросы? Пообщайтесь со&nbsp;специалистом по&nbsp;телефону&nbsp;<br>+7 (342)
                    214-88-00</p>
                <p>Брайт парк ближе, чем кажется<br> Проложите маршрут до&nbsp;ближайшего салона</p>
            </div>
            <yandex-map-component :coordinates='@json($data['coordinates'])'></yandex-map-component>
        </footer>
    </div>
@endsection
