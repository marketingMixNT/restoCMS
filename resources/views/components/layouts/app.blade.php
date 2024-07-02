@props(['title', 'description'])


<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    {{-- CUSTOM SCRPITS FROM ADMIN PANEL --}}
    {{-- @foreach (\App\Models\CustomScript::where('position', 'first_place')->get() as $script)
        {!! $script->content !!}
    @endforeach --}}
    <meta charset="utf-8">
    <meta name="application-name" content="{{ config('app.name') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- No Follow --}}
    @isset($noFollow)
        <meta name="robots" content="noindex, nofollow">
    @endisset

    <!--Title-->
    <title>{{ isset($title) ? $title : 'Resto' }}</title>
    <meta name="description" {{ isset($description) ? $description : 'Opis' }}>

    <!--Cannonical-->
    <link rel="canonical" href="{{ url()->current() }}" />

    <!--Favicon-->
    @include('partials.favicon')

    <!--Fonts-->
    @include('partials.fonts')




    @filamentStyles
    @vite('resources/css/app.css')
</head>

<body class="overflow-hidden bg-third-300 h-screen p-2 sm:p-5 z-50 relative">
    {{-- CUSTOM SCRPITS FROM ADMIN PANEL --}}
    {{-- @foreach (\App\Models\CustomScript::where('position', 'second_place')->get() as $script)
        {!! $script->content !!}
    @endforeach --}}
    {{-- <x-shared.preloader />
    <header>
        <x-shared.nav.navbar />
        <x-shared.nav.menu />
        {{ $header }}


    </header> --}}
   

   
    {{ $slot }}

    {{-- 
    <x-shared.mobile-buttons /> --}}
   

    @filamentScripts
    @vite('resources/js/app.js')
    {{-- CUSTOM SCRPITS FROM ADMIN PANEL --}}
    {{-- @foreach (\App\Models\CustomScript::where('position', 'third_place')->get() as $script)
        {!! $script->content !!}
    @endforeach --}}
</body>

</html>
