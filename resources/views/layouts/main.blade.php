<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('page.title', config('app.name'))</title>
    <link rel="stylesheet" href={{ asset('bootstrap502/css/bootstrap.min.css') }}>
    <link rel="stylesheet" href={{ asset('css/app.css') }}>
</head>
<body>
    <div class="d-flex flex-column justify-content-between min-vh-100">
        @include('layouts.header')
        @yield('content')
        @include('layouts.footer')
    </div>
    <script src="{{ asset('bootstrap502/js/bootstrap.min.js') }}"></script>
</body>
</html>
