<x-layouts.app title="{{__('gallery.title')}}"
    description="{{__('gallery.description')}}"
    overflowY='overflow-y-scroll'>


    <main class="mb-24">
        {{-- HERO --}}
        <section
            class="w-full sm:h-[40vh] bg-[url('/public/assets/img/about.webp')] bg-center bg-cover bg-blend-multiply bg-gray-600  bg-fixed ">

            <div
                class="relative h-full max-w-screen-md flex flex-col justify-center items-center gap-6  mx-6 sm:mx-auto  py-20 text-center text-white">

                <x-heading size='h1' class="shadow-2xl mb-4 2xl:mb-12 mt-24">
                    {{__('gallery.heading')}}
                </x-heading>

            </div>
        </section>
        {{-- GALLERY --}}
        <section>
            {{-- nav --}}
            <nav class=" px-12 py-24 flex justify-center items-center flex-wrap gap-6 items-links">
                <x-button type='button' class="item-link menu-active" data-name="all"
                    aria-label="Wybierz kategorię">Wszystkie</x-button>

                @foreach ($gallery as $index => $category)
                    <x-button type='button' class="item-link"
                        data-name="{{ Str::slug($category['category']) }}" aria-label="{{$category['category']}}">{{ $category->category }}</x-button>
                @endforeach
            </nav>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 2xl:grid-cols-4 gap-6 max-w-[1800px] mx-auto">

                @foreach ($gallery as $category)
                    @foreach ($category['items'] as $img)
                        <x-gallery-item :img="asset('/storage/' . $img)" :alt="$category->name" :data="$category['category']" />
                    @endforeach
                @endforeach
            </div>

        </section>
    </main>
    <x-shared.footer />
</x-layouts.app>
