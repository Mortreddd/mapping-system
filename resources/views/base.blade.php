<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', "Cemetery Mapping")</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @stack('styles')
    @livewireStyles
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
</head>

<body class="bg-white antialiased w-full min-vh-100 scroll-p-10 scroll-smooth">
    @yield('content')
    @livewireScripts
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
    @stack('scripts')

</body>

</html>