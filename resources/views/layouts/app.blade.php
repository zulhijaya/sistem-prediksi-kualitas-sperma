<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>WeCare - {{ $title }}</title>

        <link rel="icon" href="{{ asset('storage/favicon.png') }}">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <script src="{{ asset('js/app.js') }}" defer></script>
        
        @livewireStyles
    </head>
    <body class="font-urbanist antialiased text-gray-800">
        @yield('content')

        @livewireScripts
    </body>
</html>
