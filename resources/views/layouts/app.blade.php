<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Venyu</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<style type="text/css">
    .header li{
        margin-right: 2em;
    }

    .col-md-8.venueform, .container.myvenues, .container.myvenue{
        margin-top: 3em;
    }

    #flash-message{
        position: absolute;
        z-index: 10;
        bottom: 20px;
        right: 70px;
    }
</style>
<body>
    <div id="app">
        @include('layouts.nav')
        @yield('content')
    </div>
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
