<x-layouts.app>
    
    
    <div
    class="bg-[url('/public/assets/img/home.jpg')] bg-center bg-cover bg-blend-multiply bg-gray-500 w-full h-full rounded-md relative overflow-hidden">
    
    <x-shared.aside />

        <header class="flex justify-end sm:justify-between items-start pt-8 px-8">
            <a href="https://maps.app.goo.gl/2kxqSVtpfMSZkCZH8" target='_blank' rel='nofollow'
                class="text-white flex-col duration-500 font-light text-sm max:text-base hidden sm:flex">
                <span>Ludźmierska 26A</span>
                <span>Nowy Targ</span>
            </a>
            <a wire:navigate href="{{ route('home.index') }}" class="absolute top-7 left-1/2 -translate-x-1/2"><img
                    id="headerLogo" src="{{ asset('assets/logo/logo--white.png') }}" alt=""
                    class="max-w-[100px] 2xl:max-w-[120px] -mt-5 "></a>

            <button type="button" aria-label="otwórz menu"><x-iconpark-hamburgerbutton id="openMenu"
                    class="w-12 text-third-300  hover:text-third-400 duration-500 " /></button>
        </header>

        <main>
            <h1
                class="text-center absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-white text-4xl sm:text-5xl 2xl:text-6xl max:text-7xl shadow-2xl uppercase tracking-wider" style="line-height: 1.3">
                Sztuka<br> Włoskiej Pizzy
            </h1>
        </main>


        <x-shared.footer />
    </div>



</x-layouts.app>
