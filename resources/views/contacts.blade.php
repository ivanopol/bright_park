@extends('layouts.app2')

@section('content')
    <tab-bar :theme="'dark'" :cities='@json($cities)' :models='@json($models)' :phone="'{{$cities['active']['phone']}}'"></tab-bar>
    <header-sticky-component :theme="'light'" :city="'{{$city}}'"></header-sticky-component>
    <header-component :absolute="true"  :theme="'light'" :city="'{{$city}}'" ></header-component>
    <body>
    {!! html_entity_decode($cities['active']['begin_script']) !!}
    <div class="container p-top-90">

    </div>
    <footer class="block footer">
        <yandex-map-component :coordinates='@json($data['coordinates'])' :button="false"></yandex-map-component>
    </footer>
    </body>
@endsection
