@props(['class'=>'', 'fixed'=>false])

<footer class="{{$fixed ? "absolute bottom-0 left-0 right-0" : 'bg-primary-400'}} text-white flex flex-col sm:flex-row justify-between items-center px-12 pb-6 sm:py-12 gap-2 sm:gap-0{{$class}} rounded-md py-6 sm:py-4">

    <div class="flex justify-center items-center gap-2">
        <a href="https://www.instagram.com/marketingmix_pl/" target="_blank" rel="nofollow"> <x-iconpark-instagram-o
                class="text-third-300 w-8 hover:scale-105 duration-500" /></a>
        <a href="https://www.facebook.com/marketingmixnowytarg" target="_blank" rel="nofollow"> <x-iconpark-facebookone
                class="text-third-300 w-6 hover:scale-105 duration-500" /></a>
    </div>

    <span>© <span id="footerYear"></span> Pizzeria Guido's </span>



    <a href="{{route('privacy-policy.index')}}" class="text-xs font-light">Polityka Prywatności</a>
</footer>
