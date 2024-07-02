@props(['bgi' => '', 'heading' => '', 'mirrorLook' => false])

<section {{ $attributes }} class="flex flex-col lg:flex-row items-center justify-center last-of-type:mb-12">
    <div
        class="w-full lg:w-1/2 flex flex-col justify-center items-start px-6 xl:px-12 2xl:px-44 gap-12 py-16 sm:py-24  {{ $mirrorLook ? 'lg:order-1' : '' }}">
        <h2 class="text-4xl 2xl:text-5xl">{{ $heading }}</h2>
        <div class="space-y-6 lg:space-y-3">

            {{ $slot }}
        </div>
    </div>
    <div class="w-full lg:w-1/2 {{ $bgi }} bg-center bg-cover h-[500px] lg:h-[700px] bg-fixed "></div>
</section>
