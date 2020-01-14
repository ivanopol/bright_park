<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app2.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
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
                <p>Granta лифтбек</p>
            </div>
        </header>

        @yield('content')
    </div>
</body>
</html>
