<x-layouts.app title="Wyjątkowe Dania w Naszym Menu"
    description="Sprawdź nasze menu pełne włoskich specjałów. Autentyczna pizza, świeże składniki, tradycyjne przepisy. Skosztuj smaków Włoch już dziś!"
    hamburgerDark overflowY='overflow-y-scroll lg:overflow-y-hidden'>

    <main class="">

        <div class="flex flex-col lg:flex-row h-full w-full pb-6 ">
            <div
                class="w-full lg:w-1/2 bg-[url('/public/assets/img/menu--mobile.webp')] lg:bg-[url('/public/assets/img/menu.webp')] bg-center bg-cover bg-blend-multiply bg-gray-500 2xl:bg-transparent bg-fixed h-[60vh] sm:h-[70vh] xl:h-[83vh] 2xl:h-[87vh] max:h-[90vh] rounded-md relative">

                <h1
                    class="text-4xl sm:text-5xl 2xl:text-6xl max:text-7xl  uppercase  text-white absolute top-1/2 left-1/2 -translate-y-1/2 -translate-x-1/2 lg:hidden text-center">
                    Menu
                </h1>
            </div>
            <div class="w-full lg:w-1/2 overflow-y-scroll  xl:h-[83vh] 2xl:h-[87vh] max:h-[90vh] "
                style="scroll-behavior: smooth">

                {{-- <h1 class="text-5xl text-center mt-16 hidden lg:block">Menu</h1> --}}



                <div class="mt-6 lg:mt-24 flex flex-col px-6 sm:px-12 2xl:px-32 max:px-64">

                    {{-- <div class="flex justify-center items-center gap-4">
                        @foreach ($menus as $menu)
                            <a href="#{{ Str::slug($menu->name )}}"
                                class="border rounded-md px-4 py-2 border-black text-xs hover:bg-primary-400 hover:text-white hover:border-transparent duration-500">{{ $menu->name }}</a>
                        @endforeach
                    </div> --}}

                    @foreach ($menus as $menu)
                        <div id="{{ Str::slug($menu->name) }}"
                            class="flex justify-center items-center gap-2 my-10 text-center">

                            <h2 class="text-4xl uppercase">{{ $menu->name }}</h2>
                        </div>
                        @foreach ($menu->dishes as $dish)
                            <div class="flex flex-col justify-start items-start mb-6">
                                <div class="flex justify-between w-full">
                                    <h3 class="text-xl sm:text-2xl uppercase">{{ $dish->name }}</h3>
                                    <div class="flex justify-center items-end gap-1">

                                        <h4 class="text-xl sm:text-2xl">{{ $dish->price }}</h4>
                                        <span class="text-xs sm:text-base">zł</span>
                                    </div>
                                </div>
                                <div class="mr-12">
                                    <span class="text-xs sm:text-sm font-thin lowercase">{{ $dish->ingredients }}</span>
                                </div>
                            </div>
                        @endforeach
                    @endforeach
                </div>

            </div>


        </div>




    </main>

    <x-shared.footer />




</x-layouts.app>
