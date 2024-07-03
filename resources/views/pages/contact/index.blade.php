<x-layouts.app title="Skontaktuj się z Nami"
    description="Skontaktuj się z Pizzerią Guido. Zapraszamy do kontaktu w sprawie rezerwacji, zamówień i wszelkich pytań. Jesteśmy tu, aby Ci pomóc."
    hamburgerDark overflowY='overflow-y-scroll lg:overflow-y-hidden'>

    <main>

        <div class="flex flex-col lg:flex-row h-full w-full pb-6 gap-12 lg:gap-0">
            {{-- IMAGES --}}
            <div
                class="w-full lg:w-[50%] max:w-[55%] grid grid-cols-2 grid-rows-2 h-[75vh] xl:h-[83vh] 2xl:h-[87vh] max:h-[89vh] rounded-md relative gap-2 max:gap-6">
                <div class="  rounded-md  overflow-hidden"><img src="{{ asset('assets/img/contact.webp') }}" alt=""
                        class="w-full h-full hover:scale-105 duration-500 object-cover"></div>
                <div class="  rounded-md  overflow-hidden"><img src="{{ asset('assets/img/contact-4.webp') }}"
                        alt="" class="w-full h-full hover:scale-105 duration-500 object-cover"></div>
                <div class="  rounded-md  overflow-hidden"><img src="{{ asset('assets/img/contact-3.webp') }}"
                        alt="" class="w-full h-full hover:scale-105 duration-500 object-cover"></div>
                <div class="  rounded-md  overflow-hidden"><img src="{{ asset('assets/img/contact-2.webp') }}"
                        alt="" class="w-full h-full hover:scale-105 duration-500 object-cover"></div>
            </div>
            {{-- TEXT --}}
            <div class="w-full lg:w-[50%] max:w-[45%] overflow-y-scroll  xl:h-[83vh] 2xl:h-[87vh] max:h-[89vh] "
                style="scroll-behavior: smooth">
                {{-- container --}}
                <div class="mt-6 lg:mt-24 flex flex-col justify-center items-center gap-12 sm:gap-20 lg:gap-28">
                    <x-heading size='h1'>Kontakt</x-heading>
                    {{-- contact --}}
                    <div class=" w-[90%] lg:w-full 2xl:w-[70%] max:w-[60%] flex flex-col justify-center items-center gap-12 ">
                    
                        <div class="flex flex-col sm:flex-row text-center justify-between items-center w-full sm:px-24 gap-2">
                            <span class="text-xl">Adres</span> <span>Ludźmierska 26A <br> Nowy Targ</span>
                        </div>
                        <div class="flex flex-col sm:flex-row text-center justify-between items-center w-full sm:px-24 gap-2">
                            <span class="text-xl">Telefon</span> <a href="tel:+48453400244">+48 453 400 244</a>
                        </div>
                        <div class="flex flex-col sm:flex-row text-center justify-between items-center w-full sm:px-24 gap-2">
                            <span class="text-xl">Email</span> <a
                                href="mailto:hello@marketingmix.pl">hello@marketingmix.pl</a>
                        </div>
                        {{-- social --}}
                        <div class="flex justify-center items-center gap-6 2xl:gap-12">
                            <a href="https://www.instagram.com/marketingmix_pl/" target="_blank" rel="nofollow">
                                <x-iconpark-instagram-o
                                    class="text-primary-400 w-10 2xl:w-12 hover:scale-105 duration-500" /></a>
                            <a href="https://www.facebook.com/marketingmixnowytarg" target="_blank" rel="nofollow">
                                <x-iconpark-facebookone
                                    class="text-primary-400 w-8 2xl:w-10 hover:scale-105 duration-500" /></a>
                        </div>
                    </div>
                        {{-- open hours --}}
                        <div class="flex flex-col justify-center items-center gap-12">
                        <x-heading size='h2'>
                            Godziny otwarcia
                        </x-heading>
                        <div class="flex flex-col text-center justify-between items-center w-full px-24 gap-2">
                            <span class="text-xl">Niedziela - Czwartek</span> <span>12.00 - 22:00</span>
                        </div>
                        <div class="flex flex-col text-center justify-between items-center w-full px-24 gap-2">
                            <span class="text-xl">Piątek - Sobota</span> <span>12.00 - 24:00</span>
                        </div>
                    </div>
                    
                       {{-- form --}}
                       <div class=" w-full flex flex-col justify-center items-center gap-12">
                        <x-heading size='h2'>
                            Napisz do nas
                        </x-heading>
                        <livewire:contact-form />
                        </div>
                    {{-- map --}}
                    <div class=" w-[90%] sm:w-[80%] flex flex-col justify-center items-center gap-12 mb-12">
                        <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2592.5473536931586!2d20.00688517763385!3d49.47416687142212!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4715e5905e21c0ed%3A0x159c133ae9b83572!2sMarketingMix!5e0!3m2!1spl!2spl!4v1719984691889!5m2!1spl!2spl"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"
                        class="w-full  grayscale hover:grayscale-0 duration-500 h[-400px] 2xl:h-[600px]"></iframe>
                    </div>
                     


                </div>
                
            </div>




    </main>

    <x-shared.footer />




</x-layouts.app>
