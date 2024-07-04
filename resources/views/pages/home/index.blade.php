<x-layouts.app title="{{__('home.title')}}"
    description="{{__('home.description')}}">


    <main
        class="w-full h-screen flex justify-center items-center bg-[url('/public/assets/img/home.webp')] bg-center bg-cover bg-blend-multiply bg-gray-500  text-white">

        <x-heading size='h1'
            class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-center text-white shadow-2xl "
            style="line-height: 1.3">
            {{__('home.heading-first')}}<br> {{__('home.heading-second')}}
        </x-heading>

    </main>


    <x-shared.footer fixed />

</x-layouts.app>
