@props(['class'=>'', 'fixed'=>false])

<footer class="{{$fixed ? "absolute bottom-0 left-0 right-0" : 'bg-primary-400'}} flex flex-col sm:flex-row justify-between items-center gap-2 sm:gap-0 px-12 pb-6 sm:py-12 text-white   {{$class}} rounded-md py-6 sm:py-4">

    <x-social/>

    <span>© <span id="footerYear"></span> Pizzeria Guido's </span>



    <a href="{{route('privacy-policy.index')}}" class="text-xs font-light">{{__('shared.footer.privacy-policy')}}</a>
</footer>
