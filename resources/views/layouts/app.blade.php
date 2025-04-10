<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="/images/favicon.png">
    <title>{{ $meta['title'] ?? '' }}</title>
    <meta name="description" content="{{ $meta['description'] ?? '' }}">
    <meta name="keywords" content="{{ $meta['keywords'] ?? '' }}">
    <link rel="canonical" href="{{ url()->current() }}">

    <link rel="preload" href="{{ asset('css/custom.css') }}" as="style" onload="this.onload=null;this.rel='stylesheet';">
    <noscript><link rel="stylesheet" href="{{ asset('css/custom.css') }}"></noscript>

    <link rel="stylesheet" href="{{ asset('style.css') }}">

    <link rel="preload" as="style" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" onload="this.onload=null;this.rel='stylesheet';">
    <noscript><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"></noscript>

    <link rel="preconnect" href="https://www.googletagmanager.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <script src="{{ asset('script.js') }}" defer></script>
    <script src="{{ asset('js/custom.js') }}" defer></script>

    <script async src="https://www.googletagmanager.com/gtag/js?id=G-1D22JRK9WQ"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'G-1D22JRK9WQ');
    </script>
  
    <!-- Google Tag Manager -->
    <script>
        (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-K75D7TFP');
    </script>
    <!-- End Google Tag Manager -->
    <!-- Meta Pixel Code -->
    <script>
        !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
        n.callMethod.apply(n,arguments):n.queue.push(arguments)};
        if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
        n.queue=[];t=b.createElement(e);t.async=!0;
        t.src=v;s=b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t,s)}(window, document,'script',
        'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '1211248630570170');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
    src="https://www.facebook.com/tr?id=1211248630570170&ev=PageView&noscript=1"
    /></noscript>
    <!-- End Meta Pixel Code -->

  
    <link rel="preload" as="image" href="/images/fbf0efd993d06415633881cd7b0c43de.jpg">
    {{-- Preload the first thumbnail for faster LCP --}}
    <link rel="preload" as="image" href="https://img.youtube.com/vi/{{ $firstVideoId ?? 'default_video_id' }}/hqdefault.jpg">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

</head>

<body>

    <div class="whatsapp-container">
        <a href="https://wa.me/+918000915743" target="_blank" class="whatsapp-icon">
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
    @include('layouts.bottomMenu')
    
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-K75D7TFP"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
</body>
</html>
 <footer class="footer"></footer>