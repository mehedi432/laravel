<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>কুরআন বাংলা</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/particles.min.js') }}"></script>

    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">


    {{-- Material Icons --}}
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Amiri:ital@0;1&display=swap" rel="stylesheet"> 

    <script src="https://cdn.jsdelivr.net/npm/@mojs/core"></script>
    {{-- <script src="https://cdn.jsdelivr.net/npm/@mojs/core"></script> --}}
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body class="bg-dark">
    <div id="app">
        <div id="particles-js">
            <div class="container mr-auto">
                <main class="py-2" >
                    @yield('content')
                </main>
            </div>
        </div>
    </div>
</body>

<script>
    particlesJS.load('particles-js', 'js/particles.json', function() {
        console.log('callback - particles.js config loaded');
    });
</script>

<script src="{{ asset('js/particles.min.js') }}"></script>



</html>
