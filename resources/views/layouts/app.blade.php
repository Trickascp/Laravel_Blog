<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Blogger | @yield('title')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/all.js') }}"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/me.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/all.css') }}">
</head>
<body>
    @yield('cover')

    <div id="app">
        <nav class="navbar navbar-expand-lg" style="background-color: #FFCC66;">
                <a href="" class="navbar-brand text-dark" style="font-weight: bold;"><img src="{{ asset('img/nep_chan.png') }}" width="40">Blogger</a>
                <button class="navbar-toggler border-dark" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <i class="fa fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto list">
                        <li>
                            <a href="{{ url('/') }}" class="nav-link text-dark p-2">HOME</a>
                        </li>
                        <li>
                            <a href="{{ route('all.categorie') }}" class="nav-link text-dark p-2">CATEGORIE</a>
                        </li>
                        <li>
                            <a href="{{ url('/portofolio') }}" class="nav-link text-dark p-2">PORTOFOLIO</a>
                        </li>
                        @guest
                            <li>
                                <a class="nav-link text-dark p-2" href="{{ route('login') }}">LOGIN</a>
                            </li>
                            @if (Route::has('register'))
                                <li>
                                    <a class="nav-link text-dark p-2" href="{{ route('register') }}">REGISTER</a>
                                </li>
                            @endif
                        @else
                            <li class="dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>

                </div>
            </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
