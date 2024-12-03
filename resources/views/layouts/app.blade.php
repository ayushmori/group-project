<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">

    {{-- Owl Carousel --}}
    <link href="{{asset('assets/css/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/owl.theme.default.min.css')}}" rel="stylesheet">

    {{-- exzoom product image--}}
    <link href="{{asset('assets/exzoom/jquery.exzoom.css')}}" rel="stylesheet">

    <link href="{{asset('assets/css/custom.css')}}" rel="stylesheet">
    <!-- Scripts -->

    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.14.0/build/css/alertify.min.css"/>
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.14.0/build/css/themes/default.min.css"/>

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    

        <div id="app">
        
            @include('layouts.inc.frontend.navbar')
            
                <main>
                    @yield('content')
                </main>
    
            {{-- @include('layouts.inc.frontend.footer') --}}
        </div>

    <script>
        window.addEventListener('message', event => {
        alertify.set('notifier','position', 'top-right');
        alertify.notify(event.detail.text,event.detail.type);
    });
    </script>
</body>
</html>