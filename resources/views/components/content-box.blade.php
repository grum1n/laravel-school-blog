@php
    $classes = 'list-none w-full col-span-12 rounded-lg p-4 sm:col-span-8';
@endphp

<ul {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</ul>