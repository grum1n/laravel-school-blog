@props(['name'])

@php
    $classes = 'w-40 flex justify-center items-center px-5 py-2 rounded-full font-semibold text-white cursor-pointer';
@endphp
<li>
    <a {{ $attributes->merge(['class' => $classes]) }}>
        {{ $name }}
    </a>
</li>