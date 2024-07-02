@props(['title', 'description', 'overflowY' => ''])


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
    <title>{{ isset($title) ? $title : '' }} - Pizzeria Guido's</title>
    <meta name="description" {{ isset($description) ? $description : '' }}>

    <!--Cannonical-->
    <link rel="canonical" href="{{ url()->current() }}" />

    <!--Favicon-->
    @include('partials.favicon')

    <!--Fonts-->
    @include('partials.fonts')




    @filamentStyles
    @vite('resources/css/app.css')
</head>


<body class="overflow-hidden bg-third-300 relative">



    <div class=" fixed top-5 bottom-5 left-5 right-5  rounded-md  overflow-hidden {{ $overflowY }}">
        <x-shared.preloader />

        <x-shared.aside />

        <x-shared.header />

        {{ $slot }}




    </div>






    @filamentScripts
    @vite('resources/js/app.js')

</body>

</html>
