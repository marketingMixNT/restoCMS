<x-layouts.app title="{{__('contact.title')}}"
    description="{{__('contact.description')}}"
    hamburgerDark overflowY='overflow-y-scroll lg:overflow-y-hidden'>

    <main>

        <div class="h-full w-full flex flex-col lg:flex-row  gap-12 lg:gap-0  pb-6">
            {{-- IMAGES --}}
            <div
                class=" relative w-full lg:w-[50%] max:w-[55%]  h-[75vh] xl:h-[83vh] 2xl:h-[87vh] max:h-[89vh]  grid grid-cols-2 grid-rows-2   gap-2 ">

                <x-contact-grid-image img="{{ asset('assets/img/contact.webp') }}" />
                <x-contact-grid-image img="{{ asset('assets/img/contact-4.webp') }}" />
                <x-contact-grid-image img="{{ asset('assets/img/contact-3.webp') }}" />
                <x-contact-grid-image img="{{ asset('assets/img/contact-2.webp') }}" />

            </div>
            {{-- TEXT --}}
            <div class="w-full lg:w-[50%] max:w-[45%] xl:h-[83vh] 2xl:h-[87vh] max:h-[89vh] overflow-y-scroll ">
                {{-- container --}}
                <div class="flex flex-col justify-center items-center gap-12 sm:gap-20 lg:gap-28 mt-6 lg:mt-24 ">
                    <x-heading size='h1'>{{__('contact.heading')}}</x-heading>
                    {{-- contact --}}
                    <div
                        class=" w-[90%] lg:w-full 2xl:w-[70%] max:w-[60%] flex flex-col justify-center items-center gap-12 ">

                        <x-contact-info-item> <span class="text-xl">{{__('contact.address')}}</span><span>Ludźmierska 26A <br> Nowy Targ</span></x-contact-info-item>
                        <x-contact-info-item> <span class="text-xl">{{__('contact.phone')}}</span> <a href="tel:+48453400244" class="link-hover">+48 453 400 244</a></x-contact-info-item>
                        <x-contact-info-item> <span class="text-xl">{{__('contact.email')}}</span> <a
                                href="mailto:hello@marketingmix.pl" class="link-hover">hello@marketingmix.pl</a></x-contact-info-item>

                        {{-- social --}}
                        <x-social large />
                    </div>
                    {{-- open hours --}}
                    <div class="flex flex-col justify-center items-center gap-12">
                        <div class="flex flex-col justify-center items-center gap-4">
                            <x-heading size='h2'>
                                {{__('contact.open-hours')}}
                            </x-heading>
                            <hr class="border border-secondary-400 w-[50%] mx-auto">
                        </div>

                        <div class="flex flex-col text-center justify-between items-center w-full px-24 gap-2">
                            <span class="text-xl">{{__('contact.sunday')}} - {{__('contact.thursday')}}</span> <span>12.00 - 22:00</span>
                        </div>
                        <div class="flex flex-col text-center justify-between items-center w-full px-24 gap-2">
                            <span class="text-xl">{{__('contact.friday')}} - {{__('contact.saturday')}}</span> <span>12.00 - 24:00</span>
                        </div>
                    </div>

                    {{-- form --}}
                    <div class=" w-full flex flex-col justify-center items-center gap-12">
                        <div class="flex flex-col justify-center items-center gap-4">
                            <x-heading size='h2'>
                                {{__('contact.write-to-us')}}
                            </x-heading>
                            <hr class="border border-secondary-400 w-[50%] mx-auto">
                        </div>
                        <livewire:contact-form />
                    </div>
                    {{-- map --}}
                    <div class=" w-[90%] sm:w-[80%] flex flex-col justify-center items-center gap-12 mb-12">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2592.5473536931586!2d20.00688517763385!3d49.47416687142212!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4715e5905e21c0ed%3A0x159c133ae9b83572!2sMarketingMix!5e0!3m2!1spl!2spl!4v1719984691889!5m2!1spl!2spl"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"
                            class="w-full h[-400px] 2xl:h-[600px] grayscale hover:grayscale-0 duration-500 "
                            title="Lokalizacja w Google Maps"></iframe>
                    </div>
                </div>
            </div>
    </main>
    <x-shared.footer />

</x-layouts.app>
