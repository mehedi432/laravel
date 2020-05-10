<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title> প্রোগ্রামিং বিদ্যা </title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    @yield('css')
</head>
<body style="background-color: #343a40">
    <div id="app">
        @include('includes.nav')

        <main class="py-4 mt-5">
            
            @auth
                <div class="container">
                    @if (session()->has('success'))
                        <div class="alert alert-success">
                            {{session()->get('success')}}
                        </div>
                    @endif
                    <div class="row">
                        <div class="col-md-3">
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <a href="{{route('post.index')}}">Post</a>
                                </li>
                                <li class="list-group-item">
                                    <a href="{{route('category.index')}}">Category</a>
                                </li>
                            </ul>
                            <br>
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <a href="{{route('trashed-post.index')}}">Trashed Post</a>
                                </li>
                            </ul>
                        </div>
        
                        <div class="col-md-9">
                            @yield('content')
                        </div>
                    </div>
                </div>
            @else
                @yield('content')
            @endauth
        </main>
    </div>
    @yield('scripts')
</body>
</html>
