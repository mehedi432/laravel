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

    {{-- Material Icons --}}
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/@mojs/core"></script>
    {{-- <script src="https://cdn.jsdelivr.net/npm/@mojs/core"></script> --}}
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body class="bg-dark">
    <div id="app">
        <div id="particles-js">
            <div id="fix-view">
                <div class="container mr-auto">
                    <main class="py-2" >
                        @yield('content')
                    </main>
                </div>
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

{{-- <script>
    const burst = new mojs.Burst({
        radius: { 0 : 233 },
        count: 34,
        children: {
            shape: 'cross',
            stroke: [ 'deeppink', 'cyan', 'yellow' ],
            strokeWeight: { 13 : 0},
            angle: {360: 0},
            radius: {21 : 5},
            duration: 3400,
        }
    });

    const burst_three = new mojs.Burst({
    radius: { 0: 233 },
    count: 5,
    children: {
        shape: 'circle',
        radius: 21,
        fill: [ 'deeppink', 'cyan', 'yellow' ],
        strokeWidth: 3,
        duration: 2100
        }
    });


    const timeline = new mojs.Timeline({
        repeat: 910,
    }).add(burst, burst_three).play();
</script> --}}

</html>
