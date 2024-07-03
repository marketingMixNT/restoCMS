<ul id="languageSwitcher" class="flex gap-6 pt-12">
    @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
        <li>
            <a
                rel="alternate"
                hreflang="{{ $localeCode }}"
                href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}"
                class="uppercase text-primary-400 "
            >
                {{ strtoupper($localeCode) }}
            </a>
        </li>
    @endforeach
</ul>