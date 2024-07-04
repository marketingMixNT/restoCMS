@props(['small' => false, 'name' => '', 'label' => '', 'type' => '','errorMsg'=>''])

<div class="flex flex-col gap-3 w-full {{ $small ? 'sm:w-1/2' : '' }}">
    <label for="{{ $name }}">{{ $label }}</label>
    <input 
        wire:model.live.lazy="{{ $name }}" 
        type="{{ $type }}" 
        name="{{ $name }}" 
        id="{{ $name }}" 
        required
        class="bg-transparent border-b-2 border-t-0 border-x-0 border-b-primary-400 focus:border-b-secondary-400  outline-none focus:ring-0 focus:outline-none">
    
    @error($name)
        <x-form.error :message="$errorMsg"/>
    @enderror
</div>
