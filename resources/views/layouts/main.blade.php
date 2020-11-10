<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    {{-- Styles --}}
    <link rel="stylesheet" href="{{ asset('css/vendor.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}"/>
</head>
<body>
    <main class="py-4">
        @yield('content')
    </main>

    <script src="{{ asset('js/vendor.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>