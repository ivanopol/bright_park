@extends('layouts.app2')

@section('content')
    <tab-bar :theme="'dark'" :cities='@json($cities)' :models='@json($models)' :phone="'{{$cities['active']['phone']}}'"></tab-bar>
    <header-sticky-component :theme="'light'" :city="'{{$city}}'"></header-sticky-component>
    <header-component :absolute="true"  :theme="'light'" :city="'{{$city}}'" ></header-component>

    <div class="container">
        {{Breadcrumbs::render("about", $city)}}
    </div>

    <div class="container p-top-90">
        <div class="stocks-wrapper">
            <h1 class="ad_h1">О Компании</h1>
            <div class="stocks-one">
                <div class="stocks-one-body">
                    <p>Брайт Парк — прогрессивная федеральная автомобильная сеть, развивающаяся уже больше 12 лет. За это время дети некоторых наших клиентов сами успели стать нашими клиентами. А компания стала другом более 20 000 семей.</p>
                    <p>Мы объединяем автоцентры в 6 регионах России: Москва, Пермь, Екатеринбург, Волгоград, Ростов-на-Дону, Магнитогорск. Наша команда — лидер по продаже и обслуживанию автомобилей LADA, SKODA, УАЗ и Карлссон (автомобили с пробегом). Также мы являемся ключевыми партнерами ПАО “АВТОВАЗ” по объему продаж.</p>
                    <p>Для нас важен каждый клиент. Мы искренне радуемся, когда число любителей LADA растет! Наша главная ценность — сделать покупку и обладание автомобилем наполненным приятных эмоций. Более 1000 сотрудников старательно работают над тем, чтобы помочь вам выбрать автомобиль или воспользоваться услугами сервиса. Наша команда регулярно проходит сертификации у автопроизводителей. А свой собственный учебный центр способствует быстрому развитию профессиональных навыков каждого работника. Поэтому довериться нам не страшно</p>
                    <p>Всё это было бы невозможно без желания постоянного развития. Наши сотрудники, развиваясь профессионально и чувствуя заботу компании всегда готовы помочь в решении любых вопросов, связанных с покупкой и эксплуатацией вашего автомобиля.</p>
                    <p>Основные направления работы Брайт Парка:</p>
                    <ul>
                        <li>
                            Продажа новых и подержанных легковых авто
                        </li>
                        <li>
                            Выкуп и комиссия автомобилей с пробегом
                        </li>
                        <li>
                            Кредитование и страхование
                        </li>
                        <li>
                            Корпоративные продажи
                        </li>
                        <li>
                            Сервисное обслуживание
                        </li>
                    </ul>
                    <p>Будем рады видеть вас у нас в гостях!</p>
                </div>

            </div>
        </div>
        <footer-component :coordinates='@json($data['coordinates'])'
                          :phone='@json($cities['active']['phone'])'
                          :phone_formatted='@json($cities['active']['phone_format'])'
                          :cities='@json($cities)'
                          :page="'main'">
        </footer-component>
        {!! html_entity_decode($cities['active']['begin_script']) !!}
        <scroll-event-handler-component></scroll-event-handler-component>
        <event-handler-component></event-handler-component>
@endsection
