<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/css/app.css">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    </head>
    <body>
        @include('include.navbar')

        <div class="container">
            @if(Request::is('/'))
                <div class="mt-3">
                    @include('include.showcase')
                </div>
            @endif
            <div class="row">
                <div class="col-md-8 col-lg-8 col-sm-8 mt-3">
                    @include('include.messages')
                    @yield('content')
                </div>

                <div class="col-md-4 col-lg-4 col-sm-4 mt-3">
                    @include('include.sidebar')
                </div>
            </div>
        </div>

    <footer id="footer" class="text-center">
      <p>Copyright 2020 &copy; Basic Site</p>
    </footer>
    </body>
</html>
