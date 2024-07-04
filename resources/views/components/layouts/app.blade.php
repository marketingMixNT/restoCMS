@props(['title', 'description', 'overflowY' => '', 'hamburgerDark' => false])


<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Start cookieyes banner -->
    <script id="cookieyes" type="text/javascript"
        src="https://cdn-cookieyes.com/client_data/5e9d2d9c786cddeaa73bbe27/script.js"></script>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-4KGFHM4V0C"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-4KGFHM4V0C');
    </script>
    <meta charset="utf-8">
    <meta name="application-name" content="{{ config('app.name') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="Pizzeria, Restauracja, Pizza">

    {{-- No Follow --}}
    @isset($noFollow)
        <meta name="robots" content="noindex, nofollow">
    @endisset

    <!--Title-->
    <title>{{ isset($title) ? $title : '' }} - Pizzeria Guido's</title>
    <meta name="description" content="{{ isset($description) ? $description : '' }}">


    <!--Cannonical-->
    <link rel="canonical" href="{{ url()->current() }}" />

    <!--Favicon-->
    @include('partials.favicon')

    <!--Fonts-->
    @include('partials.fonts')




    @filamentStyles
    @vite('resources/scss/app.scss')
</head>


<body class="overflow-hidden bg-third-300 relative">

<x-shared.preloader/>




    <div class=" fixed top-5 bottom-5 left-5 right-5  rounded-md overflow-hidden  {{ $overflowY }}">


        <x-shared.aside />

        <x-shared.header :hamburgerDark='$hamburgerDark' />

        {{ $slot }}




    </div>






    @filamentScripts
    @vite('resources/js/app.js')

</body>

</html>
