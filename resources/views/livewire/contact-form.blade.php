<form wire:submit.prevent="submitForm" action="{{ route('contact.form') }}" id="contactForm" class="space-y-12 w-[90%] sm:w-[70%]">
    @csrf
    @if ($successMessage)
        <div class="rounded-md bg-primary-400 p-4 mt-8">
            <div class="flex">
                <div class="flex-shrink-0">
                    <svg class="h-5 w-5 text-white" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                            clip-rule="evenodd" />
                    </svg>
                </div>
                <div class="ml-3">
                    <p class="text-sm leading-5 font-medium text-white">
                        {{ $successMessage }}
                    </p>
                </div>
                <div class="ml-auto pl-3">
                    <div class="-mx-1.5 -my-1.5">
                        <button type="button" wire:click="$set('successMessage', null)"
                            class="inline-flex rounded-md p-1.5 text-white hover:text-third-400 focus:outline-none focus:bg-third-400 transition ease-in-out duration-150"
                            aria-label="Dismiss">
                            <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                    clip-rule="evenodd" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    @endif
    {{-- input  --}}
    <div class="flex flex-col gap-3">
        <label for="name">Imię i nazwisko</label>
        <input wire:model.live.lazy="name" type="text" name="name" id="name" required
            class="bg-transparent border-b-2 border-b-primary-400 focus:border-b-secondary-400 outline-none">
        @error('name')
            <p class="text-red-600 text-xs">Imię i nazwisko są wymagane.</p>
        @enderror
    </div>

    <div class="flex flex-col sm:flex-row gap-12 w-full">
        {{-- input --}}
        <div class="flex flex-col gap-3 w-full sm:w-1/2">
            <label for="phone">Telefon</label>
            <input wire:model.live.lazy='phone' type="tel" name="phone" id="phone"
                class="bg-transparent border-b-2 border-b-primary-400 focus:border-b-secondary-400 outline-none">
                @error('phone')
                <p class="text-red-600 text-xs mb-3">Numer telefonu może składać się tylko z cyfr oraz znaku +.</p>
            @enderror
        </div>
        {{-- input --}}
        <div class="flex flex-col gap-3 w-full sm:w-1/2">
            <label for="email">Email</label>
            <input wire:model.live.lazy='email' type="email" name="email" id="email"
                class="bg-transparent border-b-2 border-b-primary-400 focus:border-b-secondary-400 outline-none">
                @error('email')
                <p class="text-red-600 text-xs mb-3">Niepoprawny adres email.</p>
            @enderror
        </div>
    </div>
    {{-- input --}}
    <div class="flex flex-col gap-3">
        <label for="message">Wiadomość</label>
        <textarea wire:model.live.lazy='content' name="content" id="content" required
            class="bg-transparent border-b-2 border-b-primary-400 focus:border-b-secondary-400 outline-none min-h-[140px] max-h-[140px]"></textarea>
            @error('content')
            <p class="text-red-600 text-xs mb-3">Wiadomość jest wymagana.</p>
        @enderror
    </div>

<button type="submit" class="px-12 py-4 uppercase text-lg bg-black hover:bg-primary-400 duration-500 text-white rounded-md ">Wyślij</button>
</form>
