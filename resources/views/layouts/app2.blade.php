<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <script src="https://api-maps.yandex.ru/2.1/?apikey=e65fea9d-e8a0-479d-b21a-35637fdc6c6c&lang=ru_RU"
            type="text/javascript">
    </script>
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

    <title>{{ config('app.name', 'Bright Park') }}</title>

    <!-- Scripts -->
    <script src="{{ mix('js/app.js', 'build') }}" defer></script>

    <!-- Styles -->
    <link href="{{ mix('css/app2.css', 'build') }}" rel="stylesheet">
</head>
<body>
<div id="app">
    <div class="wrapper @isset($class) {{ $class  }} @endisset">
        @yield('content')
    </div>
</div>
</body>
</html>
