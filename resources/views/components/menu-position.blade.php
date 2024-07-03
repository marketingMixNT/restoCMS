@props(['dish'])

<div class="flex flex-col justify-start items-start mb-6">
    <div class="flex justify-between w-full">
        <x-heading size='h3' >{{ $dish->name }}</x-heading>
        <div class="flex justify-center items-end gap-1">
            <x-heading size="h4">{{ $dish->price }}</x-heading>
            <span class="text-xs sm:text-base">zł</span>
        </div>
    </div>
    <div class="mr-12">
        <span class="text-xs sm:text-sm font-thin lowercase">{{ $dish->ingredients }}</span>
    </div>
</div>