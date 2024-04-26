<div id="widget-{{ $class->model->id }}" class="{{ $class->model->settings->width }} my-8">
    @include($class->views['header'], ['header_class' => ''])

    <ul class="text-sm space-y-3 my-3 text-black">
        @foreach($accounts as $item)
            <li class="flex justify-between text-black">
                {{ $item->name }}

                <span class="font-medium">
                    {{ $item->balance_formatted }}
                </span>
            </li>
        @endforeach
    </ul>
</div>
