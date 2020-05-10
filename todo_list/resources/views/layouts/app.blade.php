<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo List</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
    @include('include.navbar')
    <div class="container">
        @include('include.messages')
        @yield('content')
    </div>
</body>
</html>
