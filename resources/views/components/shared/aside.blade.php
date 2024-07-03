<aside id="menu"
    class="absolute bottom-0 top-0 left-0 xl:left-[70%] 2xl:left-[75%] max:left-[80%] right-0 rounded-e-md bg-third-400  duration-500 z-50 translate-x-[100%]">

    <button id="closeMenu" type="button" aria-label="zamknij nawigację"><x-iconpark-closesmall-o
            class="absolute top-8 right-8 w-14 text-primary-400" /></button>

    <div class="flex flex-col justify-around xl:justify-evenly items-center h-full  ">


        <a wire:navigate href="{{ route('home.index') }}"><img src="{{ asset('assets/logo/logo--transparent.png') }}"
                alt="logo Pizzeria Guido's" width="250" height="279"
                class="max-w-[175px] sm:max-w-[200px] xl:max-w-[175px] 2xl:max-w-[200px] max:max-w-[250px]"></a>
        <nav>
            <ul class="space-y-6">

                <x-shared.aside-nav-link href="{{ route('about.index') }}">O nas</x-shared.aside-nav-link>
                <x-shared.aside-nav-link href="{{ route('menu.index') }}">Menu</x-shared.aside-nav-link>
                <x-shared.aside-nav-link href="{{ route('gallery.index') }}">Galeria</x-shared.aside-nav-link>
                <x-shared.aside-nav-link href="{{ route('contact.index') }}">Kontakt</x-shared.aside-nav-link>

            </ul>
        </nav>

        <x-shared.language-switcher />

    </div>
</aside>
