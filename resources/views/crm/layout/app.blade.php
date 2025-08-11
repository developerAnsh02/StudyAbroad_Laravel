<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- Meta Information --}}
    <meta name="description" content="">
    <meta name="keyword" content="">
    <meta name="author" content="theme_ocean">

    <title>@yield('title', 'WTS || CRM')</title>

    {{-- Favicon --}}
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('/images/favicon.png') }}">

    {{-- Styles --}}
    <link rel="stylesheet" href="{{ asset('crm-assets/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('crm-assets/assets/vendors/css/vendors.min.css') }}">
    <link rel="stylesheet" href="{{ asset('crm-assets/assets/vendors/css/daterangepicker.min.css') }}">
    <link rel="stylesheet" href="{{ asset('crm-assets/assets/vendors/css/jquery-jvectormap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('crm-assets/assets/vendors/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('crm-assets/assets/vendors/css/select2-theme.min.css') }}">
    <link rel="stylesheet" href="{{ asset('crm-assets/assets/vendors/css/jquery.time-to.min.css') }}">
    <link rel="stylesheet" href="{{ asset('crm-assets/assets/css/theme.min.css') }}">

    {{-- Extra CSS from child views --}}
    @stack('styles')
</head>

<body>
    {{-- Sidebar --}}
    @include('crm.layout.aside')

    {{-- Header --}}
    @include('crm.layout.header')
    <main class="nxl-container">
        <div class="nxl-content">
            {{-- Main Content --}}
            {{ $slot }}
        </div>

        {{-- Footer --}}
        @include('crm.layout.footer')
    </main>
    {{-- Customizer --}}
    @include('crm.layout.customizer')

    {{-- Vendor Scripts --}}
    <script src="{{ asset('crm-assets/assets/vendors/js/vendors.min.js') }}"></script>
    <script src="{{ asset('crm-assets/assets/vendors/js/daterangepicker.min.js') }}"></script>
    <script src="{{ asset('crm-assets/assets/vendors/js/apexcharts.min.js') }}"></script>
    <script src="{{ asset('crm-assets/assets/vendors/js/jquery.time-to.min.js') }}"></script>
    <script src="{{ asset('crm-assets/assets/vendors/js/circle-progress.min.js') }}"></script>

    {{-- App Scripts --}}
    <script src="{{ asset('crm-assets/assets/js/common-init.min.js') }}"></script>
    <script src="{{ asset('crm-assets/assets/js/analytics-init.min.js') }}"></script>
    <script src="{{ asset('crm-assets/assets/js/theme-customizer-init.min.js') }}"></script>

    {{-- Extra Scripts from child views --}}
    @stack('scripts')
</body>

</html>