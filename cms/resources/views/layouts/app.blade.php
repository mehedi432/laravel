<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title> প্রোগ্রামিং বিদ্যা </title>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">

    {{-- Using select 2 --}}
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/boba.css') }}" rel="stylesheet">

    @yield('css')
</head>

<body style="background-color: #343a40">
    <div id="app">
        @include('includes.nav')

        <main class="py-4 ">

            @auth
            <div class="container">
                @if (session()->has('success'))
                <div class="alert alert-success">
                    {{session()->get('success')}}
                </div>
                @endif

                @if (session()->has('error'))
                <div class="alert alert-warning">
                    {{session()->get('error')}}
                </div>
                @endif
                <div class="row">
                    <div class="col-md-3">
                        <ul class="list-group shadow-sm" style="font-family: 'Dejavu Serif Book'; font-size: 13px; letter-spacing: 1.6pt; font-weight: bolder;">
                            <li class="list-group-item" style="border-radius: 0%;">
                                <a class="nav-link text-dark" href="{{route('home')}}" >Home</a>
                            </li>
                            
                            @if (auth()->user()->isAdmin())
                                <li class="list-group-item" style="border-radius: 0%;">
                                    <a class="nav-link text-dark" href="{{route('users')}}" >User</a>
                                </li>
                            @endif
                            
                            <li class="list-group-item" style="border-radius: 0%;">
                                <a class="nav-link text-dark" href="{{route('post.index')}}" >Post</a>
                            </li>
                            <li class="list-group-item">
                                <a class="nav-link text-dark" href="{{route('category.index')}}">Category</a>
                            </li>
                            <li class="list-group-item">
                                <a class="nav-link text-dark" href="{{route('tags.index')}}">Tags</a>
                            </li>
                            
                            <li class="list-group-item mt-5" style="border-radius: 0%;">
                                <a class="nav-link text-dark" href="{{route('trashed-post.index')}}">Trashed Post</a>
                            </li>
                        </ul>
                        <br>
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