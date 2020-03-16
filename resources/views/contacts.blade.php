@extends('layouts.app2')

@section('content')
    <tab-bar :theme="'dark'" :cities='@json($cities)' :models='@json($models)' :phone="'{{$cities['active']['phone']}}'"></tab-bar>
    <header-sticky-component :theme="'light'" :city="'{{$city}}'"></header-sticky-component>
    <header-component :absolute="true"  :theme="'light'" :city="'{{$city}}'" ></header-component>
    <body>
    {!! html_entity_decode($cities['active']['begin_script']) !!}
    <div class="container p-top-90">

        <h1>Контакты</h1>
        <div class="contacts-wrap">
            <div class="contacts">
                <ul>
                    <li>
                        <span class="contacts-field-name">Адрес:</span>
                        <span class="contacts-field-value">{{ $cities['active']['address'] }}</span>
                    </li>
                    <li>
                        <span class="contacts-field-name">Телефон:</span>
                        <span class="contacts-field-value">{{ $cities['active']['phone'] }}</span>
                    </li>
                    <li>
                        <span class="contacts-field-name">E-Mail:</span>
                        <span class="contacts-field-value">{{ $cities['active']['email'] }}</span>
                    </li>
                    <li>
                        <span class="contacts-field-name">Соц. сети:</span>
                        <span class="contacts-field-value"><a href="{{ $cities['active']['vk_url'] }}">Вконтакте</a></span>
                    </li>
                    <li>
                        <span class="contacts-field-name"></span>
                        <span class="contacts-field-value"><a href="{{ $cities['active']['fb_url'] }}">Facebook</a></span>
                    </li>
                    <li>
                        <span class="contacts-field-name"></span>
                        <span class="contacts-field-value"><a href="{{ $cities['active']['instagram_url'] }}">Instagram</a></span>
                    </li>
                    <li>
                        <span class="contacts-field-name"></span>
                        <span class="contacts-field-value"><a href="{{ $cities['active']['youtube_url'] }}">Youtube</a></span>
                    </li>
                    <li>
                        <span class="contacts-field-name"></span>
                        <span class="contacts-field-value"><a href="{{ $cities['active']['ok_url'] }}">Одноклассники</a></span>
                    </li>
                </ul>
            </div>

            <div class="contacts-map">
                <yandex-map-component :coordinates='@json($data['coordinates'])' :button="false"></yandex-map-component>
            </div>
        </div>
    </div>

    </body>
@endsection
