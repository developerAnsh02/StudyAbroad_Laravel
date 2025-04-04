<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/image-removebg-preview (4).png') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
<script src="{{ asset('js/custom.js') }}"></script>

    <script src="{{ asset('script.js') }}" defer></script>
    <title>@yield('title', 'Study Abroad')</title>
</head>
<body>

    <div class="whatsapp-container">
        <a href="https://api.whatsapp.com/send?phone=YOUR_PHONE_NUMBER" target="_blank" class="whatsapp-icon">
            <img src="{{ asset('icons/WhatsApp_icon.png') }}" alt="WhatsApp" />
            <div class="tooltip">Chat with us on WhatsApp!</div>
        </a>
    </div>
    @include('layouts.navigation') <!-- Navigation Bar -->
    <main>
    <!-- <div class="cursor-follower"></div> -->
        @yield('content') <!-- Page Content -->
    </main>
    @include('layouts.footer') <!-- Footer -->
    <button id="backToTop" class="back-to-top">↑</button>
</body>
</html>
 <footer class="footer"></footer>