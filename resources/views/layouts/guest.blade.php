<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ $meta['title'] ?? '' }}</title>
        <link rel="icon" type="image/png" href="/images/favicon.png">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-900 antialiased">
        <div class="min-h-screen flex justify-center items-center bg-gray-900">
            <!-- Floating logos -->
            <!-- <img src="https://media.lordicon.com/icons/wired/gradient/2464-visa.svg" class="floating-logo left-[15%] top-[25%]" alt="Visa">
            <img src="https://cdn-icons-png.flaticon.com/512/3957/3957723.png" class="floating-logo left-[80%] top-[30%]" alt="Consultancy"> -->
            {{ $slot }}
        </div>
    </body>
</html>
