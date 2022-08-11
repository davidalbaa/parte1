<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> {{ config('app.name') }} | {{ $titulo }} </title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    @stack('custom-styles')
</head>

<body>
    @include('sweetalert::alert')
    @auth
        @include('modules.shared.navBar')
    @endauth
    @yield('content')
    <script src="{{ mix('js/app.js') }}"></script>
    @stack('custom-scripts')
</body>

</html>
