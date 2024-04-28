@stack('footer_start')
    <footer class="footer container">
        <div class="flex flex-col sm:flex-row items-center justify-between lg:mt-20 py-7 text-sm font-light text-black">
            <div>
                {{ trans('footer.powered') }}:
                <x-link href="{{ trans('footer.link') }}" target="_blank" override="class">{{ trans('footer.software') }}</x-link>
                &nbsp;<span class="material-icons align-middle text-black">code</span>&nbsp;
                {{ trans('footer.version') }} {{ version('short') }}
            </div>
        </div>
    </footer>
@stack('footer_end')
