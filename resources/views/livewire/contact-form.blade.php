<form wire:submit.prevent="submitForm" action="{{ route('contact.form') }}" id="contactForm"
    class=" w-[90%] sm:w-[70%] space-y-12">
    @csrf
    @if ($successMessage)
        <x-form.success-message successMessage="{{ $successMessage }}" />
    @endif

    <x-form.input name='name' type='text' label="{{ __('contact.form.name') }}"
        errorMsg="{{ __('contact.form.name-error') }}" />

    <div class="flex flex-col sm:flex-row gap-12 w-full">
        <x-form.input small name='phone' type='tel' label="{{ __('contact.form.phone') }}"
            errorMsg="{{ __('contact.form.phone-error') }}" />
        <x-form.input small name='email' type='email' label="{{ __('contact.form.email') }}" errorMsg="{{ __('contact.form.email-error') }}" />
    </div>


    <x-form.text-area name='content' label="{{ __('contact.form.message') }}" errorMsg="{{ __('contact.form.message-error') }}" />





    <x-button data-sitekey="{{ env('CAPTCHA_SITE_KEY') }}" data-callback='handle' data-action='submit'
        wire.loading.attr="disabled" type="submit" class="flex  justify-center items-center gap-2"><svg wire:loading
            wire:target="submitForm" class="animate-spin -ml-1 mr-3 h-5 w-5 text-white"
            xmlns="http://www.w3.org/2000/svg" fill="#000000" viewBox="0 0 24 24">
            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="#000000" stroke-width="4"></circle>
            <path class="opacity-75" fill="#fff"
                d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z">
            </path>
        </svg>{{ __('contact.form.submit') }}</x-button>
</form>





<script src="https://www.google.com/recaptcha/api.js?render={{ env('CAPTCHA_SITE_KEY') }}"></script>
<script>
    function handle(e) {
        grecaptcha.ready(function() {
            grecaptcha.execute('{{ env('CAPTCHA_SITE_KEY') }}', {
                    action: 'submit'
                })
                .then(function(token) {
                    @this.set('captcha', token);
                });
        })
    }
</script>
