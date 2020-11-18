<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    {{-- Styles --}}
    <link rel="stylesheet" href="{{ asset('app/assets/css/vendor.css') }}"/>
    <link rel="stylesheet" href="{{ asset('app/assets/css/style.css') }}"/>

</head>
<body>
    <main>
        @yield('content')
    </main>

    <script src="{{ asset('app/assets/js/vendor.js') }}"></script>
    <script src="{{ asset('app/assets/js/app.js') }}"></script>
</body>
</html>