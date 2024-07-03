{{-- <x-layouts.app>

    <p>rte</p>
    
    

<section id="projects">
    <div class="container">

        <!--MENU Links-->
        <div class="items-links px-12 py-24 flex justify-center items-center flex-wrap gap-6">
            <button class="item-link menu-active" data-name="all">Wszytkie</button>
            @foreach ($gallery as $index => $category)
                <button class="item-link" data-name="{{ $category->category }}">{{ $category->category }}</button>
            @endforeach
        </div>

        <div class="grid-gallery">


            @foreach ($gallery as $category)
            @foreach ($category['items'] as $img)
                <div data-name="{{ $category['category'] }}" class="grid-item relative shadow-lg">
                    <a href="{{ asset('/storage/' . $img) }}" class="glightbox">
                        <img src="{{ asset('/storage/' . $img) }}" alt="{{ $category->name }}" class="w-44" loading='lazy'>
                    </a>
                </div>
            @endforeach
        @endforeach



        </div>
    </div>
</section>

</x-layouts.app> --}}



<x-layouts.app title="Nasza Opowieść - Miłość do Włoskiej Pizzy"
    description="Poznaj historię i pasję, która stoi za naszą pizzerią. Tworzymy wyjątkową pizzę z sercem i zaangażowaniem, wierni włoskim tradycjom kulinarnym."
    overflowY='overflow-y-scroll'>


    <main class="mb-24">
        <section
            class="bg-[url('/public/assets/img/about.webp')] bg-center bg-cover bg-blend-multiply bg-gray-600 w-full sm:h-[40vh] bg-fixed ">

            <div
                class=" flex flex-col text-center  justify-center items-center text-white h-full max-w-screen-md mx-6 sm:mx-auto gap-6 py-20 relative">

                <h1
                    class="text-4xl sm:text-5xl 2xl:text-6xl max:text-7xl shadow-2xl uppercase tracking-wider mb-4 2xl:mb-12 mt-24">
                    Galeria
                </h1>


            </div>
        </section>

        <section>
            <div class="items-links px-12 py-24 flex justify-center items-center flex-wrap gap-6 ">
                <button class="item-link menu-active px-12 py-4 uppercase text-lg bg-black hover:bg-primary-400 duration-500 text-white rounded-md" data-name="all">Wszytkie</button>
                @foreach ($gallery as $index => $category)
                    <button class=" item-link px-12 py-4 uppercase text-lg bg-black hover:bg-primary-400 duration-500 text-white rounded-md"
                        data-name="{{ Str::slug($category['category']) }}">{{ $category->category }}</button>
                @endforeach
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 2xl:grid-cols-4 gap-6 max-w-[1800px] mx-auto">

                @foreach ($gallery as $category)
                    @foreach ($category['items'] as $img)
                        <a data-name="{{ Str::slug($category['category']) }}" href="{{ asset('/storage/' . $img) }}"
                            class="grid-item rounded-md overflow-hidden glightbox ">
                            <img src="{{ asset('/storage/' . $img) }}" alt="{{ $category->name }}"
                                class="w-full g-full  hover:scale-105 duration-500 max-h-[350px] min-h-[350px] object-cover"
                                loading='lazy'>
                        </a>
                    @endforeach
                @endforeach
            </div>

        </section>




    </main>
    <x-shared.footer />





</x-layouts.app>
