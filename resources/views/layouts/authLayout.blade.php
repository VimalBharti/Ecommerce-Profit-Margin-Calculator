<!DOCTYPE html>
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
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app" style="background: #fff;">
        <div class="main-navbar">
            <ul>
                <li><a href="/"><img src="{{asset('images/logo1.png')}}" width="42" height="42"></a></li>
            </ul>
        </div>

        <main>
            @yield('content')
        </main>

        <div class="card-footer text-muted text-center">
           Copyright ©2020 All rights reserved 
        </div>

    </div>
</body>
</html>
