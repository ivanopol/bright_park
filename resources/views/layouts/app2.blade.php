<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Bright Park">
    <meta name="description" content="">
    <meta name="yandex-verification" content="">

    <!-- Open Graph -->
    <meta property="og:locale" content="">
    <meta property="og:type" content="">
    <meta property="og:title" content="">
    <meta property="og:description" content="">
    <meta property="og:url" content="">
    <meta property="og:image" content="">

    <link rel="canonical" href="">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ mix('js/app.js', 'build') }}" defer></script>

    <!-- Styles -->
    <link href="{{ mix('css/app2.css', 'build') }}" rel="stylesheet">
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
                <p id="model-active"></p>
            </div>
        </header>

        @yield('content')
    </div>
</body>
</html>
