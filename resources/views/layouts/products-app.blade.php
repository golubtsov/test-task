<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased">
<div class="w-full bg-gray-100">
    <div class="flex">
        @include('layouts.products.navigation')

        <div class="w-full">
            @include('layouts.products.navbar')

            @yield('content')
        </div>
    </div>
</div>
</body>
</html>
