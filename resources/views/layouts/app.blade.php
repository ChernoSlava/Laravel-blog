<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Hexlet Blog - @yield('title')</title>
        @include('shared.metatags')
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <script src="{{ asset('js/app.js') }}"></script>
    </head>
    <body>
        <div class="container mt-4 customMainBox">
            @yield('links')
            <h1 class="headingMain">@yield('header')</h1>
            <div class="contentMain">
                @yield('content')
            </div>
        </div>
    </body>
</html>
