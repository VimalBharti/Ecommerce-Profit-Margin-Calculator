<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>ProPlix - Profit margin Calculator</title>

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
        <!--================Header Menu Area =================-->
        <div class="main-navbar">
            <ul>
                <li class="logo-img">
                    <a href="/">
                        <img src="{{asset('images/logo1.png')}}" width="42" height="42">
                        <span class="logo-text">
                            ProPlix 
                            <span class="small-tag">Beta v.0.1</span>
                        </span>
                    </a>
                </li>
            </ul>
            <ul class="navbar-nav my-2 my-lg-0">
                @guest
                    <a class="nav-link login-btn" href="{{route('login')}}"><span>Login</span></a>
                @else
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          {{ Auth::user()->name }}
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{route('dashboard')}}">Dashboard</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{ route('logout') }}"onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">Logout</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
        <!--================Header Menu Area =================-->

        <main>
            @yield('content')
        </main>

        <div class="card-footer text-muted text-center">
           Copyright ©2020 All rights reserved 
        </div>
    </div>
</body>
</html>
