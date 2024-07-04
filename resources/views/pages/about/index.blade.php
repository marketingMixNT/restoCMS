<x-layouts.app title="{{__('about.title')}}"
    description="{{__('about.description')}}"
    overflowY='overflow-y-scroll'>


    <main>
        {{-- hero --}}
        <section
            class="w-full sm:h-[97vh] bg-[url('/public/assets/img/about.webp')] bg-center bg-cover bg-blend-multiply bg-gray-600  bg-fixed ">

            <div
                class=" flex flex-col text-center  justify-center items-center text-white h-full max-w-screen-md mx-6 sm:mx-auto gap-6 py-20 relative">

                <x-heading size='h1' class=" shadow-2xl  mb-4 2xl:mb-12 mt-24">
                    {{__('about.heading')}}
                </x-heading>
                <p class="text-base sm:text-lg xl:text-base 2xl:text-xl " style="line-height: 1.6">{{__('about.text-first')}}</p>
                <p class="text-base sm:text-lg xl:text-base 2xl:text-xl " style="line-height: 1.6">{{__('about.text-second')}}</p>



                <a href="#pizza"><x-iconpark-arrowdown-o
                        class="text-white w-10 animate-bounce absolute bottom-12 hidden sm:block" />
                </a>
            </div>
        </section>

        {{-- content --}}
        {{-- first --}}
        <x-info-section bgi="bg-[url('/public/assets/img/about-2.webp')]" heading="{{__('about.section-first.title')}}">
            <x-info-section-text>{{__('about.section-first.text-first')}}</x-info-section-text>
            <x-info-section-text>{{__('about.section-first.text-second')}}</x-info-section-text>
            <x-info-section-text>{{__('about.section-first.text-third')}}</x-info-section-text>
        </x-info-section>
        {{-- second --}}
        <x-info-section bgi="bg-[url('/public/assets/img/about-3.webp')]" heading="{{__('about.section-second.title')}}" mirrorLook="true">
            <x-info-section-text>{{__('about.section-second.text-first')}}</x-info-section-text>
            <x-info-section-text>{{__('about.section-second.text-second')}}</x-info-section-text>
        </x-info-section>
        {{-- third --}}
        <x-info-section bgi="bg-[url('/public/assets/img/about-4.webp')]" heading="{{__('about.section-third.title')}}">
            <x-info-section-text>{{__('about.section-third.text-first')}}</x-info-section-text>
            <x-info-section-text>{{__('about.section-third.text-second')}}</x-info-section-text>
            <x-info-section-text>{{__('about.section-third.text-third')}}</x-info-section-text>
        </x-info-section>
    </main>
    <x-shared.footer />
</x-layouts.app>
