<x-layouts.app title="Wyjątkowe Dania w Naszym Menu"
    description="Sprawdź nasze menu pełne włoskich specjałów. Autentyczna pizza, świeże składniki, tradycyjne przepisy. Skosztuj smaków Włoch już dziś!"
    hamburgerDark overflowY='overflow-y-scroll lg:overflow-y-hidden'>

    <main>
        {{-- container --}}
        <div class="flex flex-col lg:flex-row h-full w-full pb-6 ">
            {{-- image --}}
            <div
                class="relative w-full lg:w-1/2 h-[60vh] sm:h-[70vh] xl:h-[83vh] 2xl:h-[87vh] max:h-[89vh] bg-[url('/public/assets/img/menu.webp')] bg-center bg-cover bg-blend-multiply bg-gray-500 2xl:bg-transparent bg-fixed  rounded-md ">

                <x-heading size='h1'
                    class="lg:hidden absolute top-1/2 left-1/2 -translate-y-1/2 -translate-x-1/2 text-center text-white  ">
                    Menu
                </x-heading>
            </div>
            {{-- menu --}}
            <div class="w-full lg:w-1/2   xl:h-[83vh] 2xl:h-[87vh] max:h-[89vh] overflow-y-scroll">

                <div class="flex flex-col w-[90%] sm:w-[80%] mx-auto mt-6 lg:mt-24 ">



                    @foreach ($menus as $menu)
                        <div class="flex flex-col justify-center items-center gap-2 my-10 text-center">

                            <x-heading size="h2">{{ $menu->name }}</x-heading>
                            <hr class="border border-secondary-400 w-[10%]">
                        </div>
                        @foreach ($menu->dishes as $dish)
                            <x-menu-position :dish="$dish" />
                        @endforeach
                    @endforeach
                </div>
            </div>
        </div>
    </main>

    <x-shared.footer />




</x-layouts.app>
