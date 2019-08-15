
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
    <script src="{{ asset('js/dtble_jquery.js') }}"></script>
    <script src="{{ asset('js/dtble_bootstrap.js') }}"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/me.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/all.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/dtble.css') }}">
</head>
<body>
    
    @yield('cover')

    @include('layouts.nav')

    <div class="container mt-4 mb-4">
        <div class="row">
            <div class="col-12 col-md-7">
                <main>
                    @yield('content')
                </main>
            </div>
            <div class="col-0 col-md-5 dp">
                @yield('sidepost')
            </div>
        </div>
    </div>

</body>
</html>
