@php
    $classes = 'w-full list-none flex justify-between md:justify-end items-center';
@endphp
<ul {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</ul>

