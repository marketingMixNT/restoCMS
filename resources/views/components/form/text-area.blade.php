<div class="flex flex-col gap-3">
    <label for="{{$name}}">{{$label}}</label>
    <textarea wire:model.live.lazy='{{$name}}' name="{{$name}}" id="{{$name}}" required
        class="bg-transparent border-b-2 border-b-primary-400 focus:border-b-secondary-400 outline-none min-h-[140px] max-h-[140px]"></textarea>
    @error('{{$name}}')
        <p class="text-red-600 text-xs mb-3">{{$errorMsg}}</p>
    @enderror
</div>