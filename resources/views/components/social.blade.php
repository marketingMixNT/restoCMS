@props(['large' => false])

<div class="flex justify-center items-center {{ $large ? ' gap-6 2xl:gap-12' : 'gap-2' }}">
    <a href="https://www.instagram.com/marketingmix_pl/" target="_blank" rel="nofollow" aria-label="Przejdź do instagrama">
        <x-iconpark-instagram-o
            class="{{ $large ? 'w-10 2xl:w-12 text-primary-400 ' : 'w-8 text-white' }} hover:scale-105 duration-500" /></a>
    <a href="https://www.facebook.com/marketingmixnowytarg" target="_blank" rel="nofollow" aria-label="Przejdź do facebooka">
        <x-iconpark-facebookone
            class="text-primary-400 {{ $large ? 'w-8 2xl:w-10 text-primary-400 ' : 'w-6 text-white' }} hover:scale-105 duration-500" /></a>
</div>
