<!doctype html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>{{ config('app.name') . ' | '}} @yield('title')</title>
</head>
<body>
    <x-navbar></x-navbar>

    @yield('content')
</body>
</html>
