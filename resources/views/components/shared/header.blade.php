@props(['hamburgerDark' => false])

<header class="absolute left-8 right-8 top-8 flex justify-end sm:justify-between items-start md:px-8   z-30">
    <a href="https://maps.app.goo.gl/2kxqSVtpfMSZkCZH8" target='_blank' rel='nofollow'
        class="hidden sm:flex flex-col  font-light text-sm max:text-base text-white  duration-500">
        <span>Ludźmierska 26A</span>
        <span>Nowy Targ</span>
    </a>
    <a  href="{{ route('home.index') }}" class="absolute top-0 left-1/2 -translate-x-1/2 "><img
            id="headerLogo" src="{{ asset('assets/logo/logo--white.png') }}" alt="logo pizzeria Guido's" width="120" height="134"
            class="max-w-[100px] 2xl:max-w-[120px] -mt-5 duration-500"></a>

    <button type="button" aria-label="otwórz menu"><x-iconpark-hamburgerbutton id="openMenu"
            class="w-12 {{ $hamburgerDark ? 'text-third-300 hover:text-third-400 lg:text-primary-400 lg:hover:text-primary-400' : 'text-third-300 hover:text-third-400' }}  duration-500  " /></button>
</header>
