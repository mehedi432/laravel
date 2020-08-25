<!doctype html>
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
    <div id="app">
        @include('includes.nav')
        <main class="container py-4">
            <div class="row">
                <div class="col-md-3">
                    <ul class="list-group shadow-sm">
                        <li class="list-group-item" style="border-radius: 0%;">
                            <a class="nav-link text-dark" href="{{route('home')}}" >Home</a>
                        </li>
                        
                        <li class="list-group-item" style="border-radius: 0%;">
                            <a class="nav-link text-dark" href="" >User</a>
                        </li>
                        
                        <li class="list-group-item" style="border-radius: 0%;">
                            <a class="nav-link text-dark" href="" >Post</a>
                        </li>
                        <li class="list-group-item">
                            <a class="nav-link text-dark" href="">Category</a>
                        </li>
                        <li class="list-group-item">
                            <a class="nav-link text-dark" href="">Tags</a>
                        </li>
                        <li class="list-group-item mt-5" style="border-radius: 0%;">
                            <a class="nav-link text-dark" href="">Trashed Post</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-9">
                    @yield('content')
                </div>
            </div>
        </main>
    </div>
</body>
</html>
