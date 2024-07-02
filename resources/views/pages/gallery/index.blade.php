<x-layouts.app>

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

</x-layouts.app>